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
        <h1 class="display-4">Listagem de Alunos</h1>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="input-id">Matrícula</label>
                        <input type="text" class="form-control" id="input-id" name="input-id" value="1" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="input-name">Aluno</label>
                        <input type="text" class="form-control" id="input-name" name="input-name">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-name">ㅤ</label>
                        <input type="submit" class="form-control btn btn-primary" value="Pesquisar">
                    </div>
                </div>

            </form>
        </div>
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
                    <td><a href="#">Mark</a></td>
                    <td>Otto@gmail.com</td>
                    <td>19C Térrio</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><a href="#">Jacob</a></td>
                    <td>Otto@gmail.com</td>
                    <td>15A 1º Andar</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><a href="#">Larry</a></td>
                    <td>Otto@gmail.com</td>
                    <td>12A Térrio</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>