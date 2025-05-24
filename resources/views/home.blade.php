@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
<h1 class="display-4 text-secondary mb-4">Que Tal Ser Melhor Que Ontem </h1>
<p> 


    <!-- Carrossel no topo -->
    <div id="saudeMentalCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/saude1.jpg') }}" alt="Saúde 1" class="img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h5>Autoconhecimento</h5>
            <p>Conhecer a si mesmo é o primeiro passo para o equilíbrio emocional.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/saude2.jpg') }}" alt="Saúde 2" class="img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h5>Empatia</h5>
            <p>Compreender as emoções do outro fortalece as relações humanas.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/saude3.jpg') }}" alt="Saúde 3" class="img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h5>Resiliência</h5>
            <p>A capacidade de superar desafios é fundamental para a saúde mental.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/saude1.jpg') }}" alt="Saúde 1" class="img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bem-Estar</h5>
            <p>Investir no próprio bem-estar promove uma vida mais saudável e feliz.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#saudeMentalCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#saudeMentalCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- Conteúdo -->
    <h1 class="display-4 text-primary mb-4">Bem-vindo ao Mente Jovem</h1>

    <p>
        A saúde mental é fundamental para o bem-estar geral e qualidade de vida. Ela influencia como pensamos, sentimos e agimos diante das situações da vida. Desenvolver a capacidade de reconhecer e compreender nossos sentimentos é essencial para uma boa saúde emocional.
    </p>

    <p>
        A inteligência emocional nos permite lidar melhor com os desafios diários, gerenciar o estresse e cultivar relações saudáveis. Pessoas emocionalmente inteligentes são capazes de identificar suas emoções e as dos outros, utilizando essas informações para guiar seus pensamentos e comportamentos.
    </p>

    <p>
        O desenvolvimento emocional envolve autoconhecimento, empatia e habilidades sociais. Aprender a nomear sentimentos como alegria, tristeza, raiva ou medo é o primeiro passo para compreender nossas reações e construir um equilíbrio emocional mais sólido.
    </p>

    <p>
        Cuidar da saúde mental significa buscar estratégias para manter o equilíbrio emocional, como praticar atividades físicas, manter uma rede de apoio, buscar ajuda profissional quando necessário e investir no autoconhecimento. Esse cuidado é um ato de amor próprio e essencial para uma vida plena.
    </p>

    <!-- Botão Modal -->
    <div class="text-center my-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal">
            Saiba Mais
        </button>
    </div>

</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="infoModalLabel">Sobre Saúde Mental</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      
      <div class="modal-body">
        <p>
          A saúde mental é essencial para o bem-estar e qualidade de vida. Aqui você encontrará informações, apoio e dicas sobre inteligência emocional.
        </p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        
        <a href="{{ route('projeto') }}" class="btn btn-primary">
          Conhecer Projeto
        </a>
      </div>
      
    </div>
  </div>
</div>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
