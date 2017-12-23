<section id="users-section">
    <h1 class="h1 header">
        Je suis la page users
    </h1>

    <table class="ui compact definition striped table">
        <thead>
        <tr>
            <th></th>
            <th>Pseudo</th>
            <th>E-mail</th>
            <th>Rôle</th>
            <th>Date de création</th>
            <th class="right aligned">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="role {{ $user->role }}">
                <td>
                    <div class="ui fitted toggle checkbox">
                        <input type="checkbox"><label></label>
                    </div>
                </td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at }}</td>
                <td class="right aligned">
                    <div class="ui small buttons">
                        <button class="ui grey button"><i class="icon eye"></i> Voir</button>
                        <button class="ui orange button"><i class="icon edit"></i> Modifier</button>
                        <button class="ui red button"><i class="icon trash"></i> Supprimer</button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot class="full-width">
        <tr>
            <th></th>
            <th colspan="5">
                <div class="ui right floated small primary labeled icon button">
                    <i class="user icon"></i> Nouvel utilisateur
                </div>
                <div class="ui small button">
                    Action batch 1
                </div>
                <div class="ui small button">
                    Action batch 2
                </div>
            </th>
        </tr>
        </tfoot>
    </table>

    @includeIf('shared._modal', ['id' => 'lol'])

</section>
