@extends('layouts.app', ['activePage' => 'form_hospital', 'menuParent' => 'forms', 'titlePage' => __('Hospital Forms')])

@section('content')

<div class="content">
  <!-- Logos Section -->
  <div class="row mb-4">
    <div class="col-md-12 text-center">
      <img src="{{ asset('images/gobierno-de-mexico-logo-E93B4BEE41-seeklogo.com 1.png') }}" alt="Gobierno de México" style="max-height: 100px; margin-right: 20px;">
      <img src="{{ asset('images/secretaria-salud-gobierno-federal-mexico-2020-logo-A3F6F47C9C-seeklogo.com 2.png') }}" alt="Secretaría de Salud" style="max-height: 100px; margin-right: 20px;">
    </div>
  </div>
  <div class="col-md-10 mr-auto ml-auto">
    <!-- Mostrar mensajes de error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Wizard container -->
    <div class="wizard-container">
      <div class="card card-wizard" data-color="red" id="wizardProfile">
        <form id="RangeValidation" method="POST" action="{{ route('formulario.store') }}">
          @csrf
          <div class="card-header text-center">
            <h3 class="card-title">
              HOJA DE REGISTRO DE ATENCIÓN POR VIOLENCIA Y/O LESIÓN
            </h3>
            <div class="wizard-navigation">
              <div class="progress-with-circle">
                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 21%;"></div>
              </div>
              <ul>
                <li class="nav-item">
                  <a class="nav-link active" href="#folio" data-toggle="tab">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>Folió</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about" data-toggle="tab">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Paciente Afectada(o)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#account" data-toggle="tab">
                    <i class="tim-icons icon-settings-gear-63"></i>
                    <p>Evento</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#address" data-toggle="tab">
                    <i class="tim-icons icon-delivery-fast"></i>
                    <p>Atención</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane show active" id="folio">
              <h5 class="info-text">Folio</h5>
                <div class="row">
                  <!-- CLUES -->
                  <div class="col-md-4 ml-auto mr-auto">
    <label for="clues_folio">CLUES:</label>
    <div class="form-group">
        <select id="clues" class="selectpicker form-control" name="clues" data-size="7" data-style="btn btn-primary" required>
            <option disabled selected>Selección Única</option>
            <option value="CSSSA006403">1. CSSSA006403</option>
            <option value="CSSSA006415">2. CSSSA006415</option>
            <option value="CSSSA006420">3. CSSSA006420</option>
        </select>
    </div>
</div>

                  <!-- Folio -->
                  <div class="col-md-4 ml-auto mr-auto">
                    <label for="folio">Folio:</label>
                    <div class="form-group">
                      <input type="text" id="folio" name="folio" minLength="8" class="form-control" placeholder="Folio" required>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Paciente Afectada(o) -->
              <div class="tab-pane" id="about">
                <h5 class="info-text">Información del Paciente</h5>
                <div class="row">
                    <!-- Nombre -->
                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <div class="form-group">
                            <input type="text" id="nombre" name="nombre" minLength="3" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <!-- Primer apellido -->
                    <div class="col-md-4">
                        <label for="primer_apellido">Primer apellido:</label>
                        <div class="form-group">
                            <input type="text" id="primer_apellido" name="primer_apellido" minLength="3" class="form-control" placeholder="Primer Apellido" required>
                        </div>
                    </div>
                    <!-- Segundo apellido -->
                    <div class="col-md-4">
                        <label for="segundo_apellido">Segundo apellido:</label>
                        <div class="form-group">
                            <input type="text" id="segundo_apellido" name="segundo_apellido" minLength="3" class="form-control" placeholder="Segundo Apellido" required>
                        </div>
                    </div>
                    <!-- C.U.R.P. -->
                  <div class="col-md-4">
                  <label for="curp">C.U.R.P.:</label>
                   <div class="form-group">
                <input type="text" id="curp" name="curp" maxlength="18" minlength="18" class="form-control" placeholder="Solo 18 caracteres" required>
               </div>
               </div>

                    <!-- Fecha de Nacimiento -->
                    <div class="col-md-4">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <div class="form-group">
                            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control datepicker" placeholder="dd/mm/yyyy" required>
                        </div>
                    </div>
                    <!-- Entidad o País de Nacimiento -->
                    <div class="col-md-4">
                        <label for="entidad_nacimiento">Entidad o País de Nacimiento:</label>
                        <div class="form-group">
                            <input type="text" id="entidad_nacimiento" name="entidad_nacimiento" minLength="3" class="form-control" placeholder="Entidad" required>
                        </div>
                    </div>
            
                   <!-- Edad -->
          <div class="col-md-4">
         <label for="edad">Edad:</label>
          <div class="form-group">
         <input class="form-control" type="number" id="edad" name="edad" min="0" max="999" maxlength="3" placeholder="Años" required>
         </div>
        </div>

                    <!-- Sexo -->
                    <div class="col-md-4">
                        <label for="sexo">Sexo:</label>
                        <div class="form-group">
                            <select id="sexo" class="selectpicker form-control" name="sexo" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="Hombre">1. Hombre</option>
                                <option value="Mujer">2. Mujer</option>
                                <option value="Intersexual">3. Intersexual</option>
                            </select>
                        </div>
                    </div>
                    <!-- Afiliación a los Servicios de Salud -->
                    <div class="col-md-4">
                        <label for="afiliacion">Afiliación a los Servicios de Salud:</label>
                        <div class="form-group">
                            <select id="afiliacion" class="selectpicker form-control" name="afiliacion" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="0">1. No especificado</option>
                                <option value="1">2. Ninguna</option>
                                <option value="2">3. IMSS</option>
                                <option value="3">4. ISSSTE</option>
                                <option value="4">5. PEMEX</option>
                                <option value="5">6. SEDENA</option>
                                <option value="6">7. SEMAR</option>
                                <option value="7">8. OTRA</option>
                                <option value="8">9. IMSS Bienestar</option>
                                <option value="9">10. ISSFAM</option>
                                <option value="10">11. OPD IMSS Bienestar</option>
                                <option value="99">12. Se ignora</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Campo de texto que se muestra si se selecciona "8. OTRA" -->
                    <div class="col-md-4" id="afiliacionOtraEspecifique" style="display: none;">
                        <label for="afiliacion_otra_especifique">Especifique el otro lugar:</label>
                        <div class="form-group">
                            <input type="text" id="afiliacion_otra_especifique" name="afiliacion_otra_especifique" class="form-control" placeholder="Especifique el lugar" required>
                        </div>
                    </div>
            
                    <!-- Número de Afiliación -->
                    <div class="col-md-4">
                        <label for="numero_afiliacion">Número de Afiliación:</label>
                        <div class="form-group">
                            <input class="form-control" type="text" id="numero_afiliacion" name="numero_afiliacion" pattern="[A-Za-z0-9]+" placeholder="Número de Afiliación" required>
                        </div>
                    </div>
                    <!-- Gratuidad -->
                    <div class="col-md-4">
                        <label for="gratuidad">Gratuidad:</label>
                        <div class="form-group">
                            <select id="gratuidad" class="selectpicker form-control" name="gratuidad" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- Escolaridad -->
                    <div class="col-md-4">
                        <label for="escolaridad">Escolaridad:</label>
                        <div class="form-group">
                            <select id="escolaridad" class="selectpicker form-control" name="escolaridad" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="0">1. Ninguna</option>
                                <option value="1">2. Primaria</option>
                                <option value="2">3. Secundaria</option>
                                <option value="3">4. Bachillerato o preparatoria</option>
                                <option value="4">5. Profesional</option>
                                <option value="5">6. Posgrado</option>
                                <option value="99">7. Se ignora</option>
                            </select>
                        </div>
                    </div>
                    <!-- Escolaridad Seleccionada -->
                    <div class="col-md-4" id="escolaridad_seleccionada" style="display: none;">
                        <label for="escolaridad_seleccionada">Escolaridad Seleccionada:</label>
                        <div class="form-group">
                            <select id="escolaridad_seleccionada" class="selectpicker form-control" name="escolaridad_seleccionada" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Completa</option>
                                <option value="2">2. Incompleta</option>
                            </select>
                        </div>
                    </div>
                    <!-- Sabe Leer y Escribir -->
                    <div class="col-md-4">
                        <label for="leer_escribir">Sabe Leer y Escribir:</label>
                        <div class="form-group">
                            <select id="leer_escribir" class="selectpicker form-control" name="leer_escribir" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- ¿Se Considera Indígena? -->
                    <div class="col-md-4">
                        <label for="indigena">¿Se Considera Indígena?</label>
                        <div class="form-group">
                            <select id="indigena" class="selectpicker form-control" name="indigena" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- ¿Habla alguna Lengua Indígena? -->
                    <div class="col-md-4">
                        <label for="lengua_indigena">¿Habla alguna Lengua Indígena?</label>
                        <div class="form-group">
                            <select id="lengua_indigena" class="selectpicker form-control" name="lengua_indigena" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- ¿Cuál? -->
                    <div class="col-md-4" id="cualLenguaSection" style="display: none;">
                        <label for="cual_lengua">¿Cuál?</label>
                        <div class="form-group">
                            <input type="text" id="cual_lengua" name="cual_lengua" class="form-control" placeholder="Especifique">
                        </div>
                    </div>
                    <!-- ¿Se considera Afrodescendiente? -->
                    <div class="col-md-4">
                        <label for="afrodescendiente">¿Se considera Afrodescendiente?</label>
                        <div class="form-group">
                            <select id="afrodescendiente" class="selectpicker form-control" name="afrodescendiente" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- ¿Es Migrante Retornado? -->
                    <div class="col-md-4">
                        <label for="migrante">¿Es Migrante Retornado?</label>
                        <div class="form-group">
                            <select id="migrante" class="selectpicker form-control" name="migrante" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- Mujer en Edad Fértil -->
                    <div class="col-md-4" id="mujerFertilSection" style="display: none;">
                        <label for="mujer_fertil">Mujer en Edad Fértil:</label>
                        <div class="form-group">
                            <select id="mujer_fertil" class="selectpicker form-control" name="mujer_fertil" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Embarazo</option>
                                <option value="2">2. Puerperio (de 0 a 42 días después del evento obstétrico)</option>
                                <option value="3">3. No estaba embarazada ni en el puerperio</option>
                            </select>
                        </div>
                    </div>
                    <!-- Semanas de Gestación -->
                    <div class="col-md-4" id="semanasGestacionSection" style="display: none;">
                        <label for="semanas_gestacion">Semanas de Gestación:</label>
                        <div class="form-group">
                            <input class="form-control" type="number" id="semanas_gestacion" name="semanas_gestacion" min="0" placeholder="Semanas de Gestación" required>
                        </div>
                    </div>
                    <!-- Dificultad (Discapacidad) -->
                    <div class="col-md-4">
                        <label for="discapacidad">Dificultad (Discapacidad):</label>
                        <div class="form-group">
                            <select id="discapacidad" class="selectpicker form-control" name="discapacidad" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                    <!-- Referida(o) por -->
                    <div class="col-md-4">
                        <label for="referido_por">Referida(o) por:</label>
                        <div class="form-group">
                            <select id="referido_por" class="selectpicker form-control" name="referido_por" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Unidad médica</option>
                                <option value="2">2. Procuración de Justicia</option>
                                <option value="3">3. Secretaría de Educación Pública</option>
                                <option value="4">4. Desarrollo Social</option>
                                <option value="5">5. DIF</option>
                                <option value="6">6. Otras instituciones gubernamentales</option>
                                <option value="7">7. Instituciones No gubernamentales</option>
                                <option value="8">8. Sin referencia (iniciativa propia)</option>
                            </select>
                        </div>
                    </div>
                    <!-- Unidad Médica Especifique Nombre -->
                    <div class="col-md-4" id="unidadMedicaEspecifique" style="display: none;">
                        <label for="unidad_medica">Nombre (Unidad Médica):</label>
                        <div class="form-group">
                            <input type="text" id="unidad_medica" name="unidad_medica" class="form-control" placeholder="Nombre de la Unidad Médica">
                        </div>
                    </div>
                    <!-- CLUES con autocompletado -->
                    <div class="col-md-4">
                        <label for="clues">Especifique su CLUES:</label>
                        <div class="form-group">
                            <input type="text" id="clues" name="clues" class="form-control" placeholder="CLUES" list="clues-list">
                            <datalist id="clues-list">
                                <!-- Opciones de ejemplo, se puede agregar más -->
                                <option value="CLUES1">CLUES 1</option>
                                <option value="CLUES2">CLUES 2</option>
                                <option value="CLUES3">CLUES 3</option>
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
            document.getElementById('afiliacion').addEventListener('change', function() {
                var afiliacionOtraEspecifique = document.getElementById('afiliacionOtraEspecifique');
                var afiliacionEspecifiqueInput = document.getElementById('afiliacion_otra_especifique');
            
                if (this.value === '7') { // Valor de "8. OTRA"
                    afiliacionOtraEspecifique.style.display = 'block';
                    afiliacionEspecifiqueInput.setAttribute('required', true);
                } else {
                    afiliacionOtraEspecifique.style.display = 'none';
                    afiliacionEspecifiqueInput.removeAttribute('required');
                }
            });
            </script>
            

              <!-- Evento -->
              <div class="tab-pane" id="account">
                <h5 class="info-text">Información del Evento</h5>
                <div class="row">
                  <!-- Fecha y hora de Ocurrencia -->
                  <div class="col-md-4">
                    <label for="fecha_ocurrencia">Fecha y hora de Ocurrencia:</label>
                    <div class="form-group">
                      <input type="text" id="fecha_ocurrencia" name="fecha_ocurrencia" class="form-control datetimepicker" placeholder="dd/mm/yyyy hh:mm AM/PM" required>
                    </div>
                  </div>
                  <!-- ¿Fue día festivo? -->
                  <div class="col-md-4">
                    <label for="festivo">¿Fue día festivo?</label>
                    <div class="form-group">
                      <select id="festivo" class="selectpicker form-control" name="festivo" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="1">1. SI</option>
                        <option value="2">2. NO</option>
                      </select>
                    </div>
                  </div>
                  <!-- Sitio de Ocurrencia -->
                  <div class="col-md-4">
                    <label for="sitio_ocurrencia">Sitio de Ocurrencia:</label>
                    <div class="form-group">
                      <select id="sitio_ocurrencia" class="selectpicker form-control form-control" name="sitio_ocurrencia" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Vivienda</option>
                        <option value="1">2. Institución residencial</option>
                        <option value="2">3. Escuela</option>
                        <option value="3">4. Área de deporte y atletismo</option>
                        <option value="4">5. Vía pública (peatón)</option>
                        <option value="5">6. Comercio y áreas de servicio</option>
                        <option value="6">7. Trabajo</option>
                        <option value="7">8. Granja</option>
                        <option value="8">9. Club, cantina, bar</option>
                        <option value="9">10. Vehículo automotor público</option>
                        <option value="10">11. Vehículo automotor privado</option>
                        <option value="11">12. Otro lugar (Especifique)</option>
                        <option value="12">13. Lugar no especificado</option>
                      </select>
                    </div>
                  </div>

                  <!-- Campo de texto para especificar otro lugar -->
                  <div class="col-md-4" id="otroLugarEspecifique" style="display: none;">
                    <label for="otro_lugar">Especifique:</label>
                    <div class="form-group">
                      <input type="text" id="otro_lugar" name="otro_lugar" class="form-control" placeholder="Sitio de ocurrencia">
                    </div>
                  </div>

                  <!-- Entidad Federativa/País -->
                  <div class="col-md-4">
                    <label for="entidad_pais">Entidad Federativa/País:</label>
                    <div class="form-group">
                      <input type="text" id="entidad_pais" name="entidad_pais" class="form-control" placeholder="Entidad Federativa o País">
                    </div>
                  </div>
                  <!-- Municipio o alcaldía -->
                  <div class="col-md-4">
                    <label for="municipio">Municipio o alcaldía:</label>
                    <div class="form-group">
                      <input type="text" id="municipio" name="municipio" class="form-control" placeholder="Municipio o Alcaldía" value="{{ old('municipio') }}" required>
                    </div>
                  </div>
                  <!-- Localidad -->
                  <div class="col-md-4">
                    <label for="localidad">Localidad:</label>
                    <div class="form-group">
                      <input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad">
                    </div>
                  </div>
                 <!-- Código Postal -->
      <div class="col-md-4">
      <label for="codigo_postal">Código Postal:</label>
       <div class="form-group">
        <input type="text" id="codigo_postal" name="codigo_postal" maxlength="5" minlength="5" class="form-control" placeholder="Código Postal" required>
       </div>
       </div>

                  <!-- Tipo de la Vialidad -->
                  <div class="col-md-4">
                    <label for="tipo_vialidad">Tipo de la Vialidad:</label>
                    <div class="form-group">
                      <input type="text" id="tipo_vialidad" name="tipo_vialidad" class="form-control" placeholder="Tipo de Vialidad">
                    </div>
                  </div>
                  <!-- Nombre de la vialidad -->
                  <div class="col-md-4">
                    <label for="nombre_vialidad">Nombre de la vialidad:</label>
                    <div class="form-group">
                      <input type="text" id="nombre_vialidad" name="nombre_vialidad" class="form-control" placeholder="Nombre de la Vialidad">
                    </div>
                  </div>
                  <!-- Num. Ext. -->
                  <div class="col-md-4">
                    <label for="num_ext">Num. Ext.:</label>
                    <div class="form-group">
                      <input type="text" id="num_ext" name="num_ext" class="form-control" placeholder="Número Exterior">
                    </div>
                  </div>
                  <!-- Num. Int. -->
                  <div class="col-md-4">
                    <label for="num_int">Num. Int.:</label>
                    <div class="form-group">
                      <input type="text" id="num_int" name="num_int" class="form-control" placeholder="Número Interior">
                    </div>
                  </div>
                  <!-- Tipo de asentamiento humano -->
                  <div class="col-md-4">
                    <label for="tipo_asentamiento">Tipo de asentamiento humano:</label>
                    <div class="form-group">
                      <input type="text" id="tipo_asentamiento" name="tipo_asentamiento" class="form-control" placeholder="Tipo de Asentamiento Humano">
                    </div>
                  </div>
                  <!-- Nombre de asentamiento humano -->
                  <div class="col-md-4">
                    <label for="nombre_asentamiento">Nombre de asentamiento humano:</label>
                    <div class="form-group">
                      <input type="text" id="nombre_asentamiento" name="nombre_asentamiento" class="form-control" placeholder="Nombre de Asentamiento Humano">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <h4 class="card-title-hospital"></h4>
                  </div>
                  <!-- Intencionalidad del evento -->
                  <div class="col-md-4">
                    <label for="intencionalidad_evento">Intencionalidad del evento:</label>
                    <div class="form-group">
                      <select id="intencionalidad_evento" class="selectpicker form-control" name="intencionalidad_evento" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="1">1. Accidental</option>
                        <option value="2">2. Violencia familiar</option>
                        <option value="3">3. Violencia No familiar</option>
                        <option value="4">4. Autoinfligido</option>
                        <option value="5">5. Trata de personas</option>
                      </select>
                    </div>
                  </div>
                  <!-- Agente de la Lesión -->
                  <div class="col-md-4">
                    <label for="agente_lesion">Agente de la Lesión:</label>
                    <div class="form-group">
                      <select id="agente_lesion" class="selectpicker form-control" name="agente_lesion" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Fuego, flama, sustancia caliente/vapor</option>
                        <option value="1">2. Intoxicación por drogas o medicamentos</option>
                        <option value="2">3. Pie o mano</option>
                        <option value="3">4. Caída</option>
                        <option value="4">5. Objeto contundente</option>
                        <option value="5">6. Objeto punzocortante</option>
                        <option value="6">7. Golpe contra piso o pared</option>
                        <option value="7">8. Cuerpo extraño</option>
                        <option value="8">9. Explosión</option>
                        <option value="9">10. Asfixia o sofocación</option>
                        <option value="10">11. Múltiples agentes</option>
                        <option value="11">12. Proyectil arma de fuego</option>
                        <option value="12">13. Ahorcamiento</option>
                        <option value="13">14. Radiación</option>
                        <option value="14">15. Sustancias químicas</option>
                        <option value="15">16. Corriente eléctrica</option>
                        <option value="16">17. Herramienta o maquinaria</option>
                        <option value="17">18. Sacudidas</option>
                        <option value="18">19. Desastre natural</option>
                        <option value="19">20. Vehículo de motor</option>
                        <option value="20">21. Ahogamiento por sumersión</option>
                        <option value="21">22. Piquete / mordedura de animal</option>
                        <option value="22">23. Fuerzas de la naturaleza</option>
                        <option value="23">24. Intoxicación por plantas, hongos venenosos</option>
                        <option value="24">25. Otro (Especifique)</option>
                        <option value="25">26. Se ignora</option>
                        <option value="26">27. No aplica</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4" id="agenteEspecifique" style="display: none;">
                    <label for="agente_especifique">Especifique:</label>
                    <div class="form-group">
                      <input type="text" id="agente_especifique" name="agente_especifique" class="form-control" placeholder="Agente de lesión">
                    </div>
                  </div>
                  <!-- ¿Recibió atención prehospitalaria? -->
                  <div class="col-md-4">
                    <label for="prehospitalaria">¿Recibió atención prehospitalaria?</label>
                    <div class="form-group">
                      <select id="prehospitalaria" class="selectpicker form-control" name="prehospitalaria" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="1">1. SI</option>
                        <option value="2">2. NO</option>
                      </select>
                    </div>
                  </div>
                  <!-- Tiempo de traslado a la unidad hospitalaria -->
                  <div class="col-md-4">
                    <label for="tiempo_traslado">Tiempo de traslado a la unidad hospitalaria:</label>
                    <div class="form-group">
                      <input type="text" id="tiempo_traslado" name="tiempo_traslado" class="form-control" value="HH:mm" required>
                    </div>
                  </div>
                  <!-- Se sospecha que la/el paciente estaba bajo los efectos de -->
                  <div class="col-md-4">
                    <label for="efectos_paciente">Se sospecha que la/el paciente estaba bajo los efectos de:</label>
                    <div class="form-group">
                      <select id="efectos_paciente" class="selectpicker form-control" name="efectos_paciente" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Alcohol</option>
                        <option value="1">2. Droga por indicación médica</option>
                        <option value="2">3. Drogas ilegales</option>
                        <option value="3">4. Se ignora</option>
                        <option value="4">5. Ninguna</option>
                      </select>
                    </div>
                  </div>
                </div>
                
              <div id="accidenteSection" style="display: none;">
                <div class="row">
                  <!-- ACCIDENTE -->
                  <div class="col-md-12">
                    <h4 class="card-title-hospital">ACCIDENTE</h4>
                  </div>
                  <!-- Si la causa fue accidente de vehículo de motor -->
                  <div class="col-md-4">
                    <label for="accidente_motor">Si la causa fue accidente de vehículo de motor:</label>
                    <div class="form-group">
                      <select id="accidente_motor" class="selectpicker form-control" name="accidente_motor" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="1">1. SI</option>
                        <option value="2">2. NO</option>
                      </select>
                    </div>
                  </div>
                  <!-- La/El lesionado es -->
                  <div class="col-md-4">
                    <label for="lesionado">La/El lesionado es:</label>
                    <div class="form-group">
                      <select id="lesionado" class="selectpicker form-control" name="lesionado" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Conductor</option>
                        <option value="1">2. Ocupante</option>
                        <option value="2">3. Peatón</option>
                      </select>
                    </div>
                  </div>
                  <!-- Uso equipo de Seguridad -->
                  <div class="col-md-4">
                    <label for="equipo_seguridad">Uso equipo de Seguridad:</label>
                    <div class="form-group">
                      <select id="equipo_seguridad" class="selectpicker form-control" name="equipo_seguridad" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Si</option>
                        <option value="1">2. No</option>
                        <option value="2">3. Se ignora</option>
                      </select>
                    </div>
                  </div>
                  <!-- ¿Qué tipo de seguridad utilizó? -->
                  <div class="col-md-4">
                    <label for="tipo_seguridad">¿Qué tipo de seguridad utilizó?</label>
                    <div class="form-group">
                      <select id="tipo_seguridad" class="selectpicker form-control" name="tipo_seguridad" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Cinturón de seguridad</option>
                        <option value="1">2. Casco</option>
                        <option value="2">3. Sillín porta infante</option>
                        <option value="3">4. Otro (Especifique)</option>
                      </select>
                    </div>
                  </div>
                
                  <div class="col-md-4" id="seguridadEspecifique" style="display: none;">
                      <label for="seguridad_especifique">Especifique:</label>
                      <div class="form-group">
                        <input type="text" id="seguridad_especifique" name="seguridad_especifique" class="form-control" placeholder="Tipo de seguridad">
                      </div>
                    </div>
                  </div>
                </div>

                <div id="violenciaSection" style="display: none;">
                <div class="row">
                  <!-- VIOLENCIA -->
                  <div class="col-md-12">
                    <h4 class="card-title-hospital">VIOLENCIA</h4>
                  </div>
                  <!-- Tipo de Violencia -->
                  <div class="col-md-4">
                    <label for="tipo_violencia">Tipo de Violencia:</label>
                    <div class="form-group">
                      <select id="tipo_violencia" class="selectpicker form-control" name="tipo_violencia" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Violencia física</option>
                        <option value="1">2. Violencia sexual</option>
                        <option value="2">3. Violencia psicológica</option>
                        <option value="3">4. Violencia económica/patrimonial</option>
                        <option value="4">5. Abandono y/o negligencia</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- AGRESOR -->
                  <div class="col-md-12">
                    <h4 class="card-title-hospital">AGRESOR:</h4>
                  </div>
                  <!-- Num. Agresores -->
                  <div class="col-md-4">
                    <label for="num_agresores">Num. Agresores:</label>
                    <div class="form-group">
                      <select id="num_agresores" class="selectpicker form-control" name="num_agresores" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Única</option>
                        <option value="1">2. Más de una(o)</option>
                      </select>
                    </div>
                  </div>
                  <!-- Parentesco con la/el afectada(o) -->
                  <div class="col-md-4">
                    <label for="parentesco">Parentesco con la/el afectada(o):</label>
                    <div class="form-group">
                      <input type="text" id="parentesco" name="parentesco" class="form-control" placeholder="Parentesco">
                    </div>
                  </div>
                  <!-- Sexo del agresor(a) -->
                  <div class="col-md-4">
                    <label for="sexo_agresor">Sexo del agresor(a):</label>
                    <div class="form-group">
                      <select id="sexo_agresor" class="selectpicker form-control" name="sexo_agresor" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Masculino</option>
                        <option value="1">2. Femenino</option>
                      </select>
                    </div>
                  </div>
                  <!-- Edad del agresor(a) (años) -->
                  <div class="col-md-4">
                    <label for="edad_agresor">Edad del agresor(a):</label>
                    <div class="form-group">
                      <input class="form-control" type="number" id="edad_agresor" name="edad_agresor" min="0" placeholder="Años">
                    </div>
                  </div>
                  <!-- El/La agresor(a) se sospecha que actuó bajo los efectos de -->
                  <div class="col-md-4">
                    <label for="efectos_agresor">El/La agresor(a) se sospecha que actuó bajo los efectos de:</label>
                    <div class="form-group">
                      <select id="efectos_agresor" class="selectpicker form-control" name="efectos_agresor" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Alcohol</option>
                        <option value="1">2. Droga por indicación médica</option>
                        <option value="2">3. Drogas ilegales</option>
                        <option value="3">4. Se ignora</option>
                        <option value="4">5. Ninguna</option>
                      </select>
                    </div>
                  </div>
                  <!-- En caso de evento autoinfligido, el evento ocurrió -->
                  <div class="col-md-4">
                    <label for="evento_autoinfligido">En caso de evento autoinfligido, el evento ocurrió:</label>
                    <div class="form-group">
                      <select id="evento_autoinfligido" class="selectpicker form-control" name="evento_autoinfligido" data-size="7" data-style="btn btn-primary" required>
                        <option disabled selected>Selección Única</option>
                        <option value="0">1. Única vez</option>
                        <option value="1">2. Repetido</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <!-- Atención -->
              <div class="tab-pane" id="address">
                <h5 class="info-text">Información de la Atención</h5>
                <div class="row">
                    <!-- Fecha y hora de Atención -->
                    <div class="col-md-4">
                        <label for="fecha_atencion">Fecha y hora de Atención:</label>
                        <div class="form-group">
                            <input type="text" id="fecha_atencion" name="fecha_atencion" class="form-control datetimepicker" placeholder="dd/mm/yyyy hh:mm AM/PM" required>
                        </div>
                    </div>
                    <!-- Servicio que otorgó la atención -->
                    <div class="col-md-4">
                        <label for="servicio_atencion">Servicio que otorgó la atención:</label>
                        <div class="form-group">
                            <select id="servicio_atencion" class="selectpicker form-control" name="servicio_atencion" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Consulta externa</option>
                                <option value="2">2. Hospitalización</option>
                                <option value="3">3. Urgencias</option>
                                <option value="4">4. Servicio especializado de atención a la violencia</option>
                                <option value="5">5. Otro servicio (Especifique)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="servicioEspecifique" style="display: none;">
                        <label for="servicio_especifico">Especifique el servicio:</label>
                        <div class="form-group">
                            <input type="text" id="servicio_especifico" name="servicio_especifico" class="form-control" placeholder="Especifique el servicio">
                        </div>
                    </div>
                    <!-- Tipo de atención -->
                    <div class="col-md-4">
                        <label for="tipo_atencion">Tipo de atención:</label>
                        <div class="form-group">
                            <select id="tipo_atencion" class="selectpicker form-control" name="tipo_atencion" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Médica</option>
                                <option value="2">2. Psicológica</option>
                                <option value="3">3. Quirúrgica</option>
                                <option value="4">4. Psiquiátrica</option>
                                <option value="5">5. Consejería</option>
                                <option value="6">6. Otro</option>
                                <option value="7">7. Píldora anticonceptiva de emergencia</option>
                                <option value="8">8. Profilaxis VIH</option>
                                <option value="9">9. Profilaxis otras ITS</option>
                                <option value="10">10. IVE(Interrupción Voluntaria del Embarazo)</option>
                                <option value="11">11. Vacuna VPH</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="tipoAtencionEspecifique" style="display: none;">
                        <label for="tipo_atencion_especifico">Especifique el tipo de atención:</label>
                        <div class="form-group">
                            <input type="text" id="tipo_atencion_especifico" name="tipo_atencion_especifico" class="form-control" placeholder="Especifique el tipo de atención">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <!-- Área Anatómica de Mayor Gravedad -->
                    <div class="col-md-4">
                        <label for="area_gravedad">Área Anatómica de Mayor Gravedad:</label>
                        <div class="form-group">
                            <select id="area_gravedad" class="selectpicker form-control" name="area_gravedad" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Cabeza</option>
                                <option value="2">2. Cara</option>
                                <option value="3">3. Región ocular</option>
                                <option value="4">4. Cuello</option>
                                <option value="5">5. Columna vertebral</option>
                                <option value="6">6. Extremidades superiores</option>
                                <option value="7">7. Mano</option>
                                <option value="8">8. Tórax</option>
                                <option value="9">9. Espalda y/o glúteos</option>
                                <option value="10">10. Abdomen</option>
                                <option value="11">11. Pelvis</option>
                                <option value="12">12. Región genital</option>
                                <option value="13">13. Extremidades inferiores</option>
                                <option value="14">14. Pies</option>
                                <option value="15">15. Múltiples</option>
                                <option value="16">16. Otro (Especifique)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="areaGravedadEspecifique" style="display: none;">
                        <label for="area_gravedad_especifica">Especifique el área anatómica:</label>
                        <div class="form-group">
                            <input type="text" id="area_gravedad_especifica" name="area_gravedad_especifica" class="form-control" placeholder="Especifique el área anatómica">
                        </div>
                    </div>
                    <!-- Consecuencia Resultante de Mayor Gravedad -->
                    <div class="col-md-4">
                        <label for="consecuencia_gravedad">Consecuencia Resultante de Mayor Gravedad:</label>
                        <div class="form-group">
                            <select id="consecuencia_gravedad" class="selectpicker form-control" name="consecuencia_gravedad" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Laceración/abrasión</option>
                                <option value="2">2. Aplastamiento</option>
                                <option value="3">3. Cicatrices</option>
                                <option value="4">4. Depresión</option>
                                <option value="5">5. Contusión/mallugamiento</option>
                                <option value="6">6. Congelamiento</option>
                                <option value="7">7. Aborto</option>
                                <option value="8">8. Trastornos de ansiedad/estrés postraumático</option>
                                <option value="9">9. Quemadura/corrosión</option>
                                <option value="10">10. Asfixia</option>
                                <option value="11">11. Embarazo</option>
                                <option value="12">12. Trastornos psiquiátricos</option>
                                <option value="13">13. Luxación/esguince</option>
                                <option value="14">14. Herida</option>
                                <option value="15">15. Infección de transmisión sexual</option>
                                <option value="16">16. Múltiple</option>
                                <option value="17">17. Amputación/avulsión</option>
                                <option value="18">18. Fractura</option>
                                <option value="19">19. Defunción</option>
                                <option value="20">20. Malestar emocional</option>
                                <option value="21">21. Trastorno del estado de ánimo</option>
                                <option value="22">22. Otro (Especifique)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="consecuenciaEspecifique" style="display: none;">
                        <label for="consecuencia_especifica">Especifique la consecuencia:</label>
                        <div class="form-group">
                            <input type="text" id="consecuencia_especifica" name="consecuencia_especifica" class="form-control" placeholder="Especifique la consecuencia">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <!-- Afección principal -->
                    <div class="col-md-4">
                        <label for="afeccion_principal">Afección principal:</label>
                        <div class="form-group">
                            <input type="text" id="afeccion_principal" name="afeccion_principal" class="form-control" placeholder="Afección Principal">
                        </div>
                    </div>
                    <!-- Causa Externa -->
                    <div class="col-md-4">
                        <label for="causa_externa">Causa Externa:</label>
                        <div class="form-group">
                            <input type="text" id="causa_externa" name="causa_externa" class="form-control" placeholder="Causa Externa">
                        </div>
                    </div>
                    <!-- ¿Se dió aviso al Ministerio Público? -->
                    <div class="col-md-4">
                        <label for="aviso_ministerio">¿Se dió aviso al Ministerio Público?</label>
                        <div class="form-group">
                            <select id="aviso_ministerio" class="selectpicker form-control" name="aviso_ministerio" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. SI</option>
                                <option value="2">2. NO</option>
                            </select>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <!-- Destino después de la atención -->
                    <div class="col-md-4">
                        <label for="destino_atencion">Destino después de la atención:</label>
                        <div class="form-group">
                            <select id="destino_atencion" class="selectpicker form-control" name="destino_atencion" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Domicilio</option>
                                <option value="2">2. Traslado a otra unidad médica</option>
                                <option value="3">3. Servicio especializado atención a violencia</option>
                                <option value="4">4. Consulta externa</option>
                                <option value="5">5. Defunción</option>
                                <option value="6">6. Refugio o albergue</option>
                                <option value="7">7. DIF</option>
                                <option value="8">8. Hospitalización</option>
                                <option value="9">9. Ministerio público</option>
                                <option value="10">10. Grupo de ayuda mutua</option>
                                <option value="11">11. Otro (Especifique)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="destinoEspecifique" style="display: none;">
                        <label for="destino_especifico">Especifique el destino:</label>
                        <div class="form-group">
                            <input type="text" id="destino_especifico" name="destino_especifico" class="form-control" placeholder="Especifique el destino">
                        </div>
                    </div>
                    <!-- Responsable de la atención -->
                    <div class="col-md-4">
                        <label for="responsable_atencion">Responsable de la atención:</label>
                        <div class="form-group">
                            <select id="responsable_atencion" class="selectpicker form-control" name="responsable_atencion" data-size="7" data-style="btn btn-primary" required>
                                <option disabled selected>Selección Única</option>
                                <option value="1">1. Médica(o) tratante</option>
                                <option value="2">2. Psicóloga(o) tratante</option>
                                <option value="3">3. Trabajadora o trabajador social</option>
                            </select>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <!-- Nombre(s) -->
                    <div class="col-md-4">
                        <label for="nombre_responsable">Nombre(s):</label>
                        <div class="form-group">
                            <input type="text" id="nombre_responsable" name="nombre_responsable" class="form-control" placeholder="Nombre del Responsable">
                        </div>
                    </div>
                    <!-- Primer Apellido -->
                    <div class="col-md-4">
                        <label for="primer_apellido_responsable">Primer Apellido:</label>
                        <div class="form-group">
                            <input type="text" id="primer_apellido_responsable" name="primer_apellido_responsable" class="form-control" placeholder="Primer Apellido del Responsable">
                        </div>
                    </div>
                    <!-- Segundo Apellido -->
                    <div class="col-md-4">
                        <label for="segundo_apellido_responsable">Segundo Apellido:</label>
                        <div class="form-group">
                            <input type="text" id="segundo_apellido_responsable" name="segundo_apellido_responsable" class="form-control" placeholder="Segundo Apellido del Responsable">
                        </div>
                    </div>
                </div>
            
                <div class="row">
                     <!-- C.U.R.P. -->
         <div class="col-md-4">
        <label for="curp_responsable">C.U.R.P.:</label>
        <div class="form-group">
            <input type="text" id="curp_responsable" name="curp_responsable" maxlength="18" minlength="18" class="form-control" placeholder="CURP del Responsable" required>
         </div>
         </div>

                  <!-- Cédula Profesional -->
       <div class="col-md-4">
    <label for="cedula_profesional">Cédula Profesional:</label>
    <div class="form-group">
        <input type="text" id="cedula_profesional" name="cedula_profesional" maxlength="9" minlength="8" class="form-control" placeholder="Cédula Profesional" required>
     </div>
    </div>
      </div>
            </div>
            
            <script>
            document.getElementById('servicio_atencion').addEventListener('change', function() {
                var servicioEspecifique = document.getElementById('servicioEspecifique');
                var servicioEspecifiqueInput = document.getElementById('servicio_especifico');
            
                if (this.value === '5') { // Valor de "5. Otro servicio (Especifique)"
                    servicioEspecifique.style.display = 'block';
                    servicioEspecifiqueInput.setAttribute('required', true);
                } else {
                    servicioEspecifique.style.display = 'none';
                    servicioEspecifiqueInput.removeAttribute('required');
                }
            });
            
            document.getElementById('tipo_atencion').addEventListener('change', function() {
                var tipoAtencionEspecifique = document.getElementById('tipoAtencionEspecifique');
                var tipoAtencionEspecifiqueInput = document.getElementById('tipo_atencion_especifico');
            
                if (this.value === '6') { // Valor de "6. Otro"
                    tipoAtencionEspecifique.style.display = 'block';
                    tipoAtencionEspecifiqueInput.setAttribute('required', true);
                } else {
                    tipoAtencionEspecifique.style.display = 'none';
                    tipoAtencionEspecifiqueInput.removeAttribute('required');
                }
            });
            
            document.getElementById('area_gravedad').addEventListener('change', function() {
                var areaGravedadEspecifique = document.getElementById('areaGravedadEspecifique');
                var areaGravedadEspecifiqueInput = document.getElementById('area_gravedad_especifica');
            
                if (this.value === '16') { // Valor de "16. Otro (Especifique)"
                    areaGravedadEspecifique.style.display = 'block';
                    areaGravedadEspecifiqueInput.setAttribute('required', true);
                } else {
                    areaGravedadEspecifique.style.display = 'none';
                    areaGravedadEspecifiqueInput.removeAttribute('required');
                }
            });
            
            document.getElementById('consecuencia_gravedad').addEventListener('change', function() {
                var consecuenciaEspecifique = document.getElementById('consecuenciaEspecifique');
                var consecuenciaEspecifiqueInput = document.getElementById('consecuencia_especifica');
            
                if (this.value === '22') { // Valor de "22. Otro (Especifique)"
                    consecuenciaEspecifique.style.display = 'block';
                    consecuenciaEspecifiqueInput.setAttribute('required', true);
                } else {
                    consecuenciaEspecifique.style.display = 'none';
                    consecuenciaEspecifiqueInput.removeAttribute('required');
                }
            });
            
            document.getElementById('destino_atencion').addEventListener('change', function() {
                var destinoEspecifique = document.getElementById('destinoEspecifique');
                var destinoEspecifiqueInput = document.getElementById('destino_especifico');
            
                if (this.value === '11') { // Valor de "11. Otro (Especifique)"
                    destinoEspecifique.style.display = 'block';
                    destinoEspecifiqueInput.setAttribute('required', true);
                } else {
                    destinoEspecifique.style.display = 'none';
                    destinoEspecifiqueInput.removeAttribute('required');
                }
            });
            </script>
            

            </div>
          </div>
          <div class="card-footer"> 
            <div class="pull-right">
              <button type="button" id="darDeAlta" class="btn btn-info">Nuevo Paciente</button>
              <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Siguiente' />
              <button type="submit" class="btn btn-finish btn-fill btn-primary btn-wd" name="finish">Guardar</button>
            </div>
            <div class="pull-left">
              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
            </div>
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
    <!-- Wizard container -->
  </div>
</div>
@endsection

@push('js')
  <script src="{{ asset('black/js/hospital.js') }}"></script>

  <script>
    $(document).ready(function() {
    $('.datetimepicker').datetimepicker({
        format: 'DD/MM/YYYY hh:mm A'
    });

    $('#tiempo_traslado').datetimepicker({
        format: 'HH:mm'
    });
    });

    function setFormValidation(id) {
      $(id).validate({
        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }

    $(document).ready(function() {
      setFormValidation('#RegisterValidation');
      setFormValidation('#TypeValidation');
      setFormValidation('#LoginValidation');
      setFormValidation('#RangeValidation');
    });

    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      blackDashboard.initDateTimePicker();
      if ($('.slider').length != 0) {
        demo.initSliders();
      }
    });

    $(document).ready(function() {
      // Initialise the wizard
      demo.initNowUiWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
@endpush
