<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
 <?php
    $link = mysqli_connect("localhost","root","","Pokedex");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        $req = "SELECT  * FROM pokemon ;";
      
       
      $result = mysqli_query($link,$req);
      //var_dump($result);
      
  
      if($result){
          while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                  ?>
        <div><img src=<?php echo "(../../sprites/" . $row["sprites"] . ".png"?>></div><?php

                  echo "<p>id : " . $row["id"] . "</p>";
                  echo "<p>identifier : " . $row["identifier"] . "</p>";
                  echo "<p>height : " . $row["height"] . "</p>";
                  echo "<p>weight : " . $row["weight"] . "</p>";
                  echo "<p>base_experience : " . $row["base_experience"] . "</p>";
                
          }
          mysqli_free_result($result);

      }mysqli_close($link);
              ?>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="sprites/bulbasaur.png" alt="bulbasaur"></td>
          <td>1</td>
          <td>bulbasaur</td>
          <td>7</td>
          <td>69</td>
          <td>64</td>
        </tr>
        <tr>
          <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
          <td>2</td>
          <td>ivysaur</td>
          <td>10</td>
          <td>130</td>
          <td>142</td>
        </tr>
        <tr>
          <td><img  class="super" src="sprites/venusaur.png" alt="bulbasaur"></td>
          <td>3</td>
          <td>venusaur</td>
          <td>20</td>
          <td>1000</td>
          <td>236</td>
        </tr>
        <tr>
          <td><img src="sprites/charmander.png" alt="bulbasaur"></td>
          <td>4</td>
          <td>charmander</td>
          <td>6</td>
          <td>85</td>
          <td>62</td>
        </tr>
        <tr>
          <td><img src="sprites/charmeleon.png" alt="bulbasaur"></td>
          <td>5</td>
          <td>charmeleon</td>
          <td>11</td>
          <td>190</td>
          <td>142</td>
        </tr>
        <tr>
          <td><img src="sprites/charizard.png" alt="bulbasaur"></td>
          <td>6</td>
          <td>charizard</td>
          <td>17</td>
          <td>905</td>
          <td>240</td>
        </tr>
        <tr>
          <td><img src="sprites/squirtle.png" alt="bulbasaur"></td>
          <td>7</td>
          <td>squirtle</td>
          <td>5</td>
          <td>90</td>
          <td>63</td>
        </tr>
        <tr>
          <td><img src="sprites/wartortle.png" alt="bulbasaur"></td>
          <td>8</td>
          <td>wartortle</td>
          <td>10</td>
          <td>225</td>
          <td>142</td>
        </tr>
        <tr>
          <td><img src="sprites/blastoise.png" alt="bulbasaur"></td>
          <td>9</td>
          <td>blastoise</td>
          <td>16</td>
          <td>855</td>
          <td>239</td>
        </tr>
        <tr>
          <td><img src="sprites/caterpie.png" alt="bulbasaur"></td>
          <td>10</td>
          <td>caterpie</td>
          <td>3</td>
          <td>29</td>
          <td>39</td>
        </tr>
        <tr>
          <td><img src="sprites/metapod.png" alt="bulbasaur"></td>
          <td>11</td>
          <td>metapod</td>
          <td>7</td>
          <td>99</td>
          <td>72</td>
        </tr>
        <tr>
          <td><img src="sprites/metapod.png" alt="bulbasaur"></td>
          <td>11</td>
          <td>metapod</td>
          <td>7</td>
          <td>99</td>
          <td>72</td>
        </tr>
        <tr>
          <td><img src="sprites/butterfree.png" alt="bulbasaur"></td>
          <td>12</td>
          <td>butterfree</td>
          <td>11</td>
          <td>320</td>
          <td>178</td>
        </tr>
        <tr>
          <td><img src="sprites/weedle.png" alt="bulbasaur"></td>
          <td>13</td>
          <td>weedle</td>
          <td>3</td>
          <td>32</td>
          <td>39</td>
        </tr><tr>
          <td><img src="sprites/kakuna.png" alt="bulbasaur"></td>
          <td>14</td>
          <td>kakuna</td>
          <td>6</td>
          <td>100</td>
          <td>72</td>
        </tr><tr>
          <td><img src="sprites/beedrill.png" alt="bulbasaur"></td>
          <td>15</td>
          <td>beedrill</td>
          <td>10</td>
          <td>295</td>
          <td>178</td>
        </tr><tr>
          <td><img src="sprites/pidgey.png" alt="bulbasaur"></td>
          <td>16</td>
          <td>pidgey</td>
          <td>3</td>
          <td>18</td>
          <td>50</td>
        </tr><tr>
          <td><img src="sprites/pidgeotto.png" alt="bulbasaur"></td>
          <td>17</td>
          <td>pidgeotto</td>
          <td>11</td>
          <td>300</td>
          <td>122</td>
        </tr><tr>
          <td><img src="sprites/pidgeot.png" alt="bulbasaur"></td>
          <td>18</td>
          <td>pidgeot</td>
          <td>15</td>
          <td>395</td>
          <td>216</td>
        </tr><tr>
          <td><img src="sprites/rattata.png" alt="bulbasaur"></td>
          <td>19</td>
          <td>rattata</td>
          <td>3</td>
          <td>35</td>
          <td>51</td>
        </tr><tr>
          <td><img src="sprites/raticate.png" alt="bulbasaur"></td>
          <td>20</td>
          <td>raticate</td>
          <td>7</td>
          <td>185</td>
          <td>145</td>
        </tr>
        <tr>
          <td><img src="sprites/spearow.png" alt="bulbasaur"></td>
          <td>21</td>
          <td>spearow</td>
          <td>3</td>
          <td>20</td>
          <td>52</td>
        </tr>
        <tr>
          <td><img src="sprites/fearow.png" alt="bulbasaur"></td>
          <td>22</td>
          <td>fearow</td>
          <td>12</td>
          <td>380</td>
          <td>155</td>
        </tr>
        <tr>
          <td><img src="sprites/ekans.png" alt="bulbasaur"></td>
          <td>23</td>
          <td>ekans</td>
          <td>20</td>
          <td>69</td>
          <td>58</td>
        </tr>
        <tr>
          <td><img src="sprites/arbok.png" alt="bulbasaur"></td>
          <td>24</td>
          <td>arbok</td>
          <td>35</td>
          <td>650</td>
          <td>157</td>
        </tr>
        <tr>
          <td><img src="sprites/pikachu.png" alt="bulbasaur"></td>
          <td>25</td>
          <td>pikachu</td>
          <td>4</td>
          <td>60</td>
          <td>112</td>
        </tr>
      </tbody>
    </table>
    
  </body>
</html>
