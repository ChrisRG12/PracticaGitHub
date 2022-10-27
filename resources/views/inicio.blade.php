@extends('plantilla')


@section('contenido')

<h1 class="aling-text center">Inicio</h1>

<div class="row">
    <div class="col-4 ">
        <div class="card text-center mb-5 ml-10 fw-bold" style="width: 24rem; margin-left: 7rem">
            
    
            <div class="card-header text-center">
                Formulario
            </div>

            <form action="Registro" method="POST" >
              @csrf
    
            <div class="card-body">

              <label class="form-label"> Usuario: </label>
              <input type="text" class="form-control" placeholder="Usuario" name="txtUsu" value="{{ old('txtUsu') }}">
              <p class="text-secondary fst-Italic" style="text-align: left">{{ $errors->first(txtUsu)}}</p>



              <label class="form-label"> Contraseña: </label>
               <input type="password" class="form-control" placeholder="Contraseña" name="txtcon" value="{{ old('txtcon') }}">
               <p class="text-secondary fst-Italic" style="text-align: left">{{ $errors->first(txtcon)}}</p>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-secondary  btn-lg">Guardar Usuario</button>

            </form>
               
            </div>
    
    
        </div> 
    </div>
    <div class="col-4">
        <div class="container col-md-12" > 

            <div class="card text-center mb-5 fw-bold" style="width: 34rem; margin-left: 15rem">
                
                <div class="card-header text-center">
                Tabla
                </div>
                
                <div class="card-body">
                    <table class="table table-success table-striped"">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
        
        
        
        
            </div> 
            
        
        </div>
    </div>








@stop