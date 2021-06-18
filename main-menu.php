<!-- TABS -->
<div class="row">
<div class="col-4">
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
         <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Aulas</button>
         <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Perguntas e Respostas</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <!-- TABS CONTENT -->    
    <div class="list-group">Curso de Tarot: 1º Setenário 
      <h4>Arcano 0 - O Louco</h4>
      
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        Simbolismo Numérico
      </a>
      <a href="#" class="list-group-item list-group-item-action">Títulos do Ternário Teosófico</a>
      <a href="#" class="list-group-item list-group-item-action">Influências Astrológicas</a>
      <a href="#" class="list-group-item list-group-item-action">O Louco em diferentes contextos deleitura</a>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <br>
  <div class="tweets">
    <div class="tweet" v-for="tweet in tweets">
      <h6>{{ username }}</h6>
      <p>{{ tweet }}</p>
    </div>
  </div>
  <p><br>Escreva aqui sua pergunta:</p>
  <div class="input-group">
    <textarea class="form-control" v-model="newTweet" value="tweet" aria-label="With textarea"></textarea>
    <button v-on:click="tweets.push(newTweet)" class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
  </div>
  </div>
</div>
</div>