<div class="col">
    @role('admin')
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $enquete->count() }}</h3>
                        @if ($enquete->count() > 1)
                            <p>Total Enquêtes reçues</p>
                        @else
                            <p>Total Enquête reçu</p>
                        @endif
                    </div>
                    <div class="icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <a href="{{ route('admin.user.index') }}" class="small-box-footer">View <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $category }}</h3>
                        @if ($category > 1)
                            <p>Total recommandation reçu</p>
                        @else
                            <p>Total recommandations reçu</p>
                        @endif
                    </div>
                    <div class="icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <a href="{{ route('admin.category.index') }}" class="small-box-footer">View <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $product }}</h3>
                        @if ($product > 1)
                            <p>Total sanctions</p>
                        @else
                            <p>Total sanction</p>
                        @endif
                    </div>
                    <div class="icon">
                        <i class="fa fa-exclamation-circle"></i>
                    </div>
                    <a href="{{ route('admin.product.index') }}" class="small-box-footer">View <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $collection }}</h3>
                        @if ($collection > 1)
                            <p>Total plaintes</p>
                        @else
                            <p>Total plainte</p>
                        @endif
                    </div>
                    <div class="icon">
                        <i class="fa fa-bell"></i>
                    </div>
                    <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!--div class="row">
                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="info-box bg-info">
                                                                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Bookmarks</span>
                                                                    <span class="info-box-number">41,410</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 70%"></div>
                                                                    </div>
                                                                    <span class="progress-description">
                                                                        70% Increase in 30 Days
                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="info-box bg-success">
                                                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Likes</span>
                                                                    <span class="info-box-number">41,410</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 70%"></div>
                                                                    </div>
                                                                    <span class="progress-description">
                                                                        70% Increase in 30 Days
                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="info-box bg-warning">
                                                                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Events</span>
                                                                    <span class="info-box-number">41,410</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 70%"></div>
                                                                    </div>
                                                                    <span class="progress-description">
                                                                        70% Increase in 30 Days
                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="info-box bg-danger">
                                                                <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Comments</span>
                                                                    <span class="info-box-number">41,410</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 70%"></div>
                                                                    </div>
                                                                    <span class="progress-description">
                                                                        70% Increase in 30 Days
                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div-->

        <!--div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">L'âge des enquêtes ouvert et encours</h3>
                                                            </div>

                                                            <div class="card-body">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 10px">#</th>
                                                                            <th>Task</th>
                                                                            <th>Progress</th>
                                                                            <th style="width: 40px">Pourcentage</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1.</td>
                                                                            <td>Update software</td>
                                                                            <td>
                                                                                <div class="progress progress-xs">
                                                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="badge bg-danger">55%</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2.</td>
                                                                            <td>Clean database</td>
                                                                            <td>
                                                                                <div class="progress progress-xs">
                                                                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="badge bg-warning">70%</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3.</td>
                                                                            <td>Cron job running</td>
                                                                            <td>
                                                                                <div class="progress progress-xs progress-striped active">
                                                                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="badge bg-primary">30%</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4.</td>
                                                                            <td>Fix and squish bugs</td>
                                                                            <td>
                                                                                <div class="progress progress-xs progress-striped active">
                                                                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="badge bg-success">90%</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="card-footer clearfix">
                                                                <ul class="pagination pagination-sm m-0 float-right">
                                                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div-->

        <div class="card">
            <div class="card-header">
                <!--h3 class="card-title">Liste de toutes les enquêtes</h3-->
                <button class="btn btn-sm btn-info" id="filterAll">Toutes les enquêtes</button>
                <button class="btn btn-sm btn-success" id="filterOuvert">Ouvert</button>
                <button class="btn btn-sm btn-warning" id="filterEncours">Encours</button>
                <button class="btn btn-sm btn-danger" id="filterClos">Clos</button>


                <div class="card-tools">
                    <a href="{{ route('admin.enquete.create') }}" class="btn btn-sm bg-black">Ajouter une enquête</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="categoryTable">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Réference</th>
                            <th>Intitulé</th>
                            <th>Category</th>
                            <th>Date de création</th>
                            <th>Date de Mis à jour</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($enquete as $enq)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>ENQ{{ $enq->num_ordre }}AN24</td>
                            <td>{{ $enq->libele }}</td>
                            <td>{{ $enq->categorie }}</td>
                            <td>{{ $enq->date_reception }}</td>
                            <td>{{ $enq->date_demarrage }}</td>
                            <td><span class="badge {{ ($enq->status=='close') ? 'bg-info' : ($enq->status=='ouvert' ? 'bg-succes' : 'bg-warnig') }}">{{ $enq->status }}</span></td>
                            <td>
                                <button type="submit" class="btn btn-sm bg-gradient-info"><i class="fa fa-eye"></i></button>
                                <a href="" class="btn btn-sm bg-gradient-warning text-white"><i class="fas fa-pencil-alt"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

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
            var table = $('#categoryTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "responsive": true,
            });

            $('#filterAll').on('click', function() {
                table.search('').draw();
            });

            $('#filterOuvert').on('click', function() {
                table.search('ouvert').draw();
            });

            $('#filterEncours').on('click', function() {
                table.search('encours').draw();
            });

            $('#filterClos').on('click', function() {
                table.search('clos').draw();
            });
        });
            </script>
        @endsection

    @endrole
</div>
