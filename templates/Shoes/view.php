<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shoe $shoe
 */
?>

<div style="height: 59.5em; width: 119.5em; left: -25em; position: absolute; background-color:<?= h($shoe->backgroundcolour) ?>">
        <h2 style="left: 1em; top: 1em; position: relative"><?= h($shoe->brandname) ?></h2>
        <h2 style="position:absolute; left: 70%; top: 33%"><?= h($shoe->shoetype) ?></h2>
        <h1 style="position: absolute; left: 20%; top: 35%; font-size: 20em"><?= h($shoe->shoename) ?></h1>
        <div style="position: absolute; left: 20em; top: 40em; width: 30%">
        <p style="color:white"><?= h($shoe->shoetext) ?></p>
        </div>
        <h3 style="position: absolute; left: 50%; top: 92%"><?= h($shoe->footername) ?></h3>
        <h2 class="vertical">
          SHOP NOW
        </h2>
        <a style="position: absolute; left: 5%; top: 92%; text-decoration: none; color: white; font-size: 1.5em" href="/shoes">BACK</a>
        <img src="/img/<?= h($shoe->image) ?>" style="position:absolute; left: 25%; top: 15%">
</div>
<style>
    h1, h2, h3 {
        color: white;
    }
    .vertical {
  position: relative;
  top: 20%;
  writing-mode: vertical-lr;
  text-orientation: sideways-right;
  color: white;
  font-family: "Open Sans", sans-serif;
  font-size: 280%;
  
}
</style>