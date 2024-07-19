<x-admin>
    @section('title', 'Recommations des enquetes')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des recommandations</h3>
            <div class="card-tools"><a href="{{ route('recommandation.create') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-plus"></i></a></div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="userTable">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Réf.</th>
                        <th>Recommandation</th>
                        <th>Date pub. rapport enquete</th>
                        <th>Acceptation</th>
                        <th>Deadline</th>
                        <th>Porteur d'action</th>
                        <th>Direction</th>
                        <th>Résultat attendus</th>
                        <th>Date cloture recom.</th>
                        <th>Commentaires</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recommandations as $recommandation)
                        <tr>
                            <td>{{ $recommandation->id }}</td>
                            <td>{{ $recommandation->num_ordre }}</td>
                            <td>{{ $recommandation->recommandation }}</td>
                            <td>{{ $recommandation->causes }}</td>
                            <td>{{ $recommandation->acceptation }}</td>
                            <td>{{ $recommandation->deadline }}</td>
                            <td>{{ $recommandation->date_reception }}</td>
                            <td>{{ $recommandation->acceptation }}</td>
                            <td>{{ $recommandation->acceptation }}</td>
                            <td>{{ $recommandation->date_cloture }}</td>
                            <td>{{ $recommandation->commentaires }}</td>
                            <td>
                                <a type="submit" class="btn btn-sm bg-gradient-info"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('recommandation.edit', encrypt($recommandation->id)) }}" class="btn btn-sm bg-gradient-warning text-white"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('recommandation.destroy', encrypt($recommandation->id)) }}" method="POST"
                                    onsubmit="return confirm('Are sure want to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('js')
        <script>
            $(function() {
                $('#userTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                });
            });
        </script>
    @endsection
</x-admin>
