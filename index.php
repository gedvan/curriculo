<?php

$experience = [
  [
    'start'     => '2013',
    'end'       => 'current',
    'title'     => 'Tribunal de Justiça da Paraíba',
    'desc'      => 'State court of justice',
    'position'  => 'System Analyst',
    'text'      => "Leader of the portal and usability team, that develops " .
      "and maintains the institution's websites, and specify usability " .
      "guidelines for the other systems.",
  ],
  [
    'start'     => '2010',
    'end'       => '2014',
    'title'     => 'Faculdade iDez / Universidade Estácio de Sá',
    'desc'      => 'Private college',
    'position'  => 'Adjunct Professor',
    'text'      => "Adjunct Professor at Analysis and Development of Systems " .
      "undergraduate course, teaching subjects related to web development.",
  ],
  [
    'start'     => '2010',
    'end'       => '2012',
    'title'     => 'Instituto Federal de Educação, Ciência e Tecnologia da Paraíba',
    'desc'      => 'Federal Institute of Education, Science and Technology',
    'position'  => 'Adjunct Professor',
    'text'      => "Adjunct Professor at the technology department's " .
      "undergraduate courses, teaching subjects related to programming " .
      "fundamentals, data structures, and web development.",
  ],
  [
    'start'     => '2009',
    'end'       => '2011',
    'title'     => 'Lexa Sistemas',
    'desc'      => 'Local software development company',
    'position'  => 'Software Engineer',
    'text'      => "Full-stack development and maintenance of web sites and " .
      "applications in PHP and Drupal.",
  ],
  [
    'start'     => '2007',
    'end'       => '2009',
    'title'     => 'UFPB Virtual',
    'desc'      => 'E-learning department of Federal University',
    'position'  => 'Software Engineer',
    'text'      => "Installation, setup, and maintenance of Moodle LMS; Theme " .
      "and module development, integrating with other institution's systems.",
  ],
  [
    'start'     => '2005',
    'end'       => '2006',
    'title'     => 'ADM Soluções em Informática',
    'desc'      => 'Sites development company',
    'position'  => 'Intern - Developer',
    'text'      => "Web development using LAMP stack.",
  ],
];

$education = [
  [
    'start' => '2007',
    'end'   => '2009',
    'title' => "Master's Degree, Informatics",
    'place' => "Universidade Federal da Paraíba",
    'text'  => "Development of an interactive virtual reality software to " .
      "support learning of image classification algorithms.",
  ],
  [
    'start' => '2002',
    'end'   => '2006',
    'title' => "Bachelor's Degree, Computer Science",
    'place' => "Universidade Federal da Paraíba",
  ],
];

$skills = [
  'advanced'      => ['PHP', 'Drupal', 'HTML/CSS'],
  'intermediate'  => ['Wordpress', 'Javascript'],
  'beginner'      => ['Angular', 'VueJs', 'React'],
  'related'       => ['Linux', 'Git', 'Docker', 'Composer', 'Node.js/NPM', 'Less/Sass',
    'Bootstrap', 'SVG', 'Inkscape']
];

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gedvan Pereira Dias - Curriculum Vitae</title>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b55aa8c7d6.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="page">

    <main>

      <header>
        <h1 class="fullname">Gedvan Pereira Dias</h1>
        <div class="headline">PHP/Drupal Full-Stack Developer</div>
      </header>

      <section class="objective">
        <h2>Objective</h2>
        <p>I'm looking for a remote part-time job as a Drupal developer.</p>
      </section>

      <section class="experience items">
        <h2><span>Experience</span></h2>
        <ul>
          <?php foreach ($experience as $item): ?>
          <li>
            <h3><?= $item['title'] ?> <span class="desc"><?= $item['desc'] ?></span></h3>
            <h4><?= $item['position'] ?></h4>
            <div class="period">
              <span class="start"><?= $item['start'] ?></span>
              <span class="sep">-</span>
              <span class="end"><?= $item['end'] ?></span>
            </div>
            <p><?= $item['text'] ?></p>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="education items">
        <h2>Education</h2>
        <ul>
          <?php foreach ($education as $item): ?>
          <li>
            <h3><?= $item['title'] ?></h3>
            <h4><?= $item['place'] ?></h4>
            <div class="period">
              <span class="start"><?= $item['start'] ?></span>
              <span class="sep">-</span>
              <span class="end"><?= $item['end'] ?></span>
            </div>
            <?php if (isset($item['text'])): ?>
            <p><?= $item['text'] ?></p>
            <?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>

    </main>

    <aside>

      <section class="foto">
        <img src="foto.jpg" />
      </section>

      <section class="info">
        <ul>
          <li class="location">
            <i class="fas fa-map-marker-alt"></i>
            João Pessoa, Brazil
          </li>
          <li class="email">
            <i class="far fa-envelope"></i>
            gedvan@gmail.com
          </li>
          <li class="github">
            <i class="fab fa-github"></i>
            github.com/gedvan
          </li>
          <li class="linkedin">
            <i class="fab fa-linkedin-in"></i>
            linkedin.com/in/gedvan
          </li>
          <li class="phone">
            <i class="fas fa-mobile-alt"></i>
            +55 83 98823-8356
          </li>
        </ul>
      </section>

      <section class="skills">
        <h2>Skills</h2>
        <div class="group advanced">
          <h3>Advanced</h3>
          <ul>
            <?php foreach ($skills['advanced'] as $skill): ?>
              <li><?= $skill ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="group intermediate">
          <h3>Intermediate</h3>
          <ul>
            <?php foreach ($skills['intermediate'] as $skill): ?>
              <li><?= $skill ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="group beginner">
          <h3>Beginner</h3>
          <ul>
            <?php foreach ($skills['beginner'] as $skill): ?>
              <li><?= $skill ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="group related">
          <h3>Related</h3>
          <p><?= implode(', ', $skills['related']) ?></p>
        </div>
      </section>

      <section class="about">
        <h2>About me</h2>
        <p>
          I'm a software developer with 15 years of experience in web
          development, mainly with PHP. I've been using Drupal for ten
          years, and during this time I've got a good expertise in site
          building, theming and module development. I also have several years
          of practice in frontend coding with JS and CSS.
        </p>
      </section>

    </aside>

  </div>
</body>
</html>
