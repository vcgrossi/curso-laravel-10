<h1>Lista de suporte</h1>

<a href=" {{ route('supports.create') }}"> Criar Pergunta</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>id</th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{$support->subject }}</td>
                <td>{{$support->status }}</td>
                <td>{{$support->body }}</td>
                <td>
                  <a href="{{ route('supports.show', $support->id) }}"> ir</a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>