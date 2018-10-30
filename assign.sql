/*---___---___---___---___---*/
/*---___---___---___---___---*/
/* Assignement SQL Queries*/
/*---___---___---___---___---*/
/*---___---___---___---___---*/ -->

/*Select all data from all tables*/

SELECT brands.brand ,models.model ,styles.style, shoes.name, shoes.description, shoes.image 

FROM brands 
INNER JOIN models ON models.brand_id = brands.id 
INNER JOIN styles ON styles.model_id = models.id 
INNER JOIN shoes on shoes.style_id = styles.id

WHERE shoes.name="Sean Wotherspoon" 

/*Select all shoes by name and models*/

SELECT brands.brand, models.model, styles.style, shoes.name
FROM models
INNER JOIN models ON models.brand_id = brands.id 
INNER JOIN styles ON styles.model_id = models.id 
INNER JOIN shoes on shoes.style_id = styles.id
