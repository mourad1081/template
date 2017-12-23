<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Auth;
use App;
class UsersTest extends TestCase
{
    private function initTest() {
        $u = new User([
            'title'   => 'Titre de test',
            'content' => 'Contenu de test',
            'user_id' => 2
        ]);
        // Save dans la DB ==> Sera supprimé après les test via l'instruction "use DatabaseTransactions"
        $u->save();
        Auth::login(App\User::whereId(2)->first());
        return $u->id;
    }

    private function endTest(User $user) {
        $user->delete();
        Auth::logout();
    }
}