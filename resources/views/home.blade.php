@extends('layouts.app')

@section('content')

<section id="home" class="hero">
  <img src="{{ asset('images/profile.jpg') }}" alt="Foto Saya">

  <h1 class="text-4xl font-bold">
    Hi, Saya <span class="text-sky-400">Ryan</span>
  </h1>

  <p class="text-lg opacity-80">
    Mahasiswa IT • Web Developer • Laravel
  </p>

  <a href="#projects">Projects</a>
</section>

<section id="about" class="section">
  <h2>Tentang Saya</h2>
  <p class="text-center">
    Saya mahasiswa IT yang fokus pada pengembangan web modern
    menggunakan Laravel, PHP, HTML, CSS, dan MySQL.
  </p>
</section>

<section id="skills" class="section dark">
  <h2>Skill</h2>
  <div class="skills">
    <span>HTML</span>
    <span>CSS</span>
    <span>JavaScript</span>
    <span>PHP</span>
    <span>Laravel</span>
    <span>MySQL</span>
  </div>
</section>

<section id="projects" class="section">
  <h2>Project</h2>
  <div class="cards">
    <x-project-card title="Web Portofolio"
      desc="Portofolio pribadi dengan Laravel & CSS modern" />

    <x-project-card title="Website Informasi"
      desc="Website statis dengan HTML, CSS, dan JS" />
  </div>
</section>

@endsection
