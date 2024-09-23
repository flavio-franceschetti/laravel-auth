@extends('layouts.app')

@section('content')
    <table class="table">
        <tdead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Data di creazione</th>
                <th scope="col">Status</th>
                <th scope="col">GitHub</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->created_at->format('d-m-Y') }}</td>
                        <td>{{ $project->status ? 'Done' : 'In progress' }}</td>
                        <td>{{ $project->github }}</td>
                        <td class="d-flex flex-column gap-2">
                            <a class="btn btn-primary" href="#"><i class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-warning" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection
