
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card">

                <div class="card-header">{{ __('Alumnos internos') }}</div>

                <div class="card-body row">

                  <div class="row col-md-12" style="margin-bottom:10px;">

                    <div class="col-md-8">

                      <label>Alumnos que han completado su pago</label>

                    </div>

                    <a class="btn btn-primary col-md-3" href="/admin/reporte/excel/export">

                        {{ __('Descargar') }}

                    </a>

                  </div>

                  <div class="row col-md-12">

                    <div class="col-md-8">

                      <label>Alumnos que aun no han completado su pago</label>

                    </div>

                    <button type="button" class="btn btn-primary col-md-3" onclick="location.href='{{url('/export1')}}'">

                        {{ __('Descargar') }}

                    </button>

                  </div>

                </div>

            </div>

            <hr>

            <div class="card">

              <div class="card-header">{{ __('Alumnos Externos') }}</div>

              <div class="card-body row">

                <div class="row col-md-12" style="margin-bottom:10px;">

                  <div class="col-md-8">

                    <label>Alumnos que han completado su pago</label>

                  </div>

                  <button type="button" class="btn btn-primary col-md-3" onclick="location.href='{{url('/export2')}}'">

                      {{ __('Descargar') }}

                  </button>

                </div>

              </div>

            </div>

            <hr>

            <div class="card">

              <div class="card-header">{{ __('Profesionales') }}</div>

              <div class="card-body row">

                <div class="row col-md-12" style="margin-bottom:10px;">

                  <div class="col-md-8">

                    <label>Profesionales</label>

                  </div>

                  <button type="button" class="btn btn-primary col-md-3" onclick="location.href='{{url('/export3')}}'">

                      {{ __('Descargar') }}

                  </button>

                </div>

              </div>

            </div>

        </div>

    </div>

</div>



