<div id="chat">
    <div class="card chat-card">
        <div class="card-body">
            <div class="card-header">
                <h5>Registo de objecto achado</h5>
            </div>
            <form id="form-registar-modal">
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome completo" name="nome-modal" id="nome-modal">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Telefone" name="telefone-modal" id="telefone-modal">
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="descricao-modal" name="descricao-modal" cols="30" id="descricao-modal"
                        rows="2"  maxlength="150">Informação adicional</textarea>
                </div>
                <p><small>* Ao clicar em "Registar", confirma que encontrou este objecto.</small></p>
                <button type="submit" class="btn" >Registar</button>
            </form>
            <i class="bx bx-plus-circle" id="close-chat" ></i>
        </div>

    </div>
</div>
