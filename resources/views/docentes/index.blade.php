@extends('docentes.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Plana docente</h2>
                    </div>
                    <div>
                        <a href="" class="btn btn-success btn-sm" title="Nuevo Docente">Agregar Docente</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>DNI</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alexis Iginio</td>
                                        <td>Gamboa Gonzales</td>
                                        <td>77340061</td>
                                        <td>igigam99@gmail.com</td>
                                        <td>916194629</td>
                                        <td>
                                            <a href="" title="Ver Docente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="" title="Editar Docente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <a href="" title="Eliminar Docente"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Eliminar</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nelvin Eduardo</td>
                                        <td>Lujan Rojas</td>                                        
                                        <td>71969550</td>
                                        <td>nlujanrojas@gmail.com</td>
                                        <td>910692648</td>
                                        <td>
                                            <a href="" title="Ver Docente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="" title="Editar Docente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <a href="" title="Eliminar Docente"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Eliminar</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Angel Manuel</td>
                                        <td>Cabana Herrera</td>
                                        <td>73268151</td>
                                        <td>angel993104@gmail.com</td>
                                        <td>916427137</td>
                                        <td>
                                            <a href="" title="Ver Docente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="" title="Editar Docente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <a href="" title="Eliminar Docente"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Eliminar</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection