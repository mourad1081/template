<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Auth;
use App;
class PostsTest extends TestCase
{
    private function initTest() {
        $p = new Post([
            'title'   => 'Titre de test',
            'content' => 'Contenu de test',
            'user_id' => 2
        ]);
        // Save dans la DB ==> Sera supprimé après les test via l'instruction "use DatabaseTransactions"
        $p->save();
        Auth::login(App\User::whereId(2)->first());
        return $p->id;
    }

    private function endTest(App\Post $post) {
        $post->delete();
        Auth::logout();
    }

    /**
     * Ce test vérifie que la requête rate car aucun argument n'a été fourni.
     */
    public function test_noParameters_updateFails()
    {
        $p = App\Post::whereId($this->initTest())->first();
        // Pour retirer les middlewares tels que la vérification XSRF
        $this->withoutMiddleware();
        echo "posts/{$p->id}";
        $response = $this->put("posts/{$p->id}");
        $response->assertStatus(self::$OK);
        $response->assertSeeText('false');
        $this->endTest($p);
    }

    /**
     * Ce test vérifie que la requête réussit avec tous les champs de la table Post.
     * Pas de vérification CSRF.
     */
    public function test_allParameters_updateSucceed()
    {
        $p = App\Post::whereId($this->initTest())->first();
        // Pour retirer les middlewares tels que la vérification XSRF
        $this->withoutMiddleware();

        $response = $this->put("posts/{$p->id}", [
            'title'   => 'TEST_ALL_PARAMS',
            'content' => 'TEST_ALL_PARAMS',
            'user_id' => 2,
            'img'     => 'TEST_ALL_PARAMS'
        ]);
        $response->assertStatus(self::$OK);
        $response->assertSeeText('true');
        $this->endTest($p);
    }
}
