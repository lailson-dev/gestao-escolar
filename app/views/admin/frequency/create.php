<section class="jumbotron jumbotron-fluid">

    <nav class="btn-group d-flex justify-content-center align-items-center mb-5" role="group"
         aria-label="Grupo de botões com dropdown aninhado">
        <!-- Home -->
        <a href="/dashboard" class="btn btn-secondary">Início</a>
        <!-- Cadastro Dropdown -->
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastro
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/cadastrar/turma">Turma</a>
                <a class="dropdown-item" href="/cadastrar/disciplina">Disciplina</a>
                <a class="dropdown-item" href="/cadastrar/professor">Professor</a>
                <a class="dropdown-item" href="/cadastrar/aula">Aula</a>
                <a class="dropdown-item" href="/cadastrar/aluno">Aluno</a>
                <a class="dropdown-item" href="/cadastrar/frequencia">Frequência</a>
            </div>
        </div>
        <!-- Consulta Dropdown -->
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Consulta
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/consultar/aluno">Aluno</a>
                <a class="dropdown-item" href="/consultar/aula">Aula</a>
                <a class="dropdown-item" href="/consultar/frequencia">Frequência</a>
            </div>
        </div>
        <!-- Comunicar aos pais -->
        <a href="/servicos/informar-pais" class="btn btn-secondary">Informar aos pais</a>
    </nav>

    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4">Cadastro de Frequências</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="input-id">Matrícula</label>
                        <input type="text" class="form-control" id="input-id" name="input-id" value="1" disabled>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="input-name">Aluno</label>
                        <input type="text" class="form-control" id="input-name" name="input-name"
                               value="Lailson Conceição" disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-data">Data</label>
                        <input type="date" class="form-control" id="input-data" name="input-data">
                    </div>
                    <div class="form-check form-check-inline col-md-1">
                        <input class="form-check-input" type="radio" name="radio-presence" id="present" value="1">
                        <label class="form-check-label" for="present">Presente</label>
                    </div>
                    <div class="form-check form-check-inline col-md-1">
                        <input class="form-check-input" type="radio" name="radio-presence" id="absent" value="0">
                        <label class="form-check-label" for="absent">Ausente</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-discipline">Disciplina</label>
                        <select id="input-discipline" name="input-discipline" class="form-control">
                            <option selected></option>
                            <option>Português</option>
                            <option>Matemática</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-name-teacher">Professor</label>
                        <select id="input-name-teacher" name="input-name-teacher" class="form-control">
                            <option selected></option>
                            <option>Carlos Santos</option>
                            <option>Tiago Almeida</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-name">ㅤ</label>
                        <input type="submit" class="form-control btn btn-primary" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Sala</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto@gmail.com</td>
                    <td>19C Térrio</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Jacob</td>
                    <td>Otto@gmail.com</td>
                    <td>15A 1º Andar</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Larry</td>
                    <td>Otto@gmail.com</td>
                    <td>12A Térrio</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
