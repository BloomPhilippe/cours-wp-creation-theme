# Les champs de bases

## Les pages

![cover](../images/fields-1.png)

- le champ titre

    Utilisation : 
    
    ````php
    <?php echo get_the_title(); ?>
    ````  
      
    ````php
    <?php the_title(); ?>
    ````
    
- le permalien (le chemin url pour arriver à votre page)

  Utilisation :
  
  ````php
  <?php echo get_permalink(); ?>


- le champ texte

  Utilisation :
  
  ````php
  <?php echo get_the_content(); ?>


- le champ image

  Utilisation avec balise ``<img>`` :
  
  ````php
  <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
  ````
  
  Utilisation avec URL :
  
  ````php
  <?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail', true)[0]; ?>
  ````
    

## Les articles (post)

- le champ titre

    Utilisation : 
    
    ````php
    <?php echo get_the_title(); ?>
    ````  
      
    ````php
    <?php the_title(); ?>
    ````
    
- le permalien (le chemin url pour arriver à votre page)

  Utilisation :
  
  ````php
  <?php echo get_permalink(); ?>


- le champ texte

  Utilisation :
  
  ````php
  <?php echo get_the_content(); ?>


- le champ résumé (extrait)

  ![cover](../videos/post-extrait.gif)

  Utilisation :
  
  ````php
  <?php echo get_the_excerpt(); ?>


- le champ image

  Utilisation avec balise ``<img>`` :
  
  ````php
  <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
  ````
  
  Utilisation avec URL :
  
  ````php
  <?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail', true)[0]; ?>
  ````



# Les champs customs




---

[:back:](analyse-template.md) | [:soon:](template-custom.md)

