var count = 1;
function addInput() {
    if(count < 6){
        count++;
        $('#listCheck').append(`
        <div class="row chacklist-${count}">
            <div class="form-group row">
                <label for="name" class="control-label">Nome</label>
                <input id="inputCheck-${count}" type="text" class="form-control" name="nm_user-${count}" required>
            </div>

            <div class="form-group row">
                <label for="email" class="control-label">Email</label>
                <input id="inputCheck-${count}" type="email" class="form-control" name="email_user-${count}" required>
            </div>

            <div class="form-group row">
                <label for="password" class="control-label">Telefone</label>
                <input id="inputCheck-${count}" type="text" onblur="maskTelefone(this)" class="form-control" name="tel_user-${count}" required>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-4 col-form-label">
                    <button type="button" class="button" id="chacklist-${count}" onclick="removerInput(this)" value="${count}">Apagar</button>
                </div>
            </div>
        </div>
        `)
    }
}


