<?php require 'inc/head.php'; ?>


<section class="cookies container-fluid">
  <h1>Votre commande</h1>

              <table class="table">
                  <thead>
                  <tr>
                      <th>Vos cookies</th>
                      <th>Nombre de cookie</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      if (empty($_COOKIE["panier"])) :
                   ?>
                  <?php
                      else :
                  ?>
                  <?php
                      if (!empty($_COOKIE['panier']['Nuts'])) :
                  ?>
                      <tr>
                       <td>Pecan Nuts</td>
                       <td><?= $_COOKIE['panier']['Nuts'] ?></td>
                      </tr>
                   <?php
                      endif;
                   ?>
                   <?php
                      if (!empty($_COOKIE['panier']['chips'])) :
                   ?>
                      <tr>
                        <td>Chocolate Chips</td>
                        <td><?= $_COOKIE['panier']['chips'] ?></td>
                      </tr>
                   <?php
                      endif;
                   ?>
                   <?php
                      if (!empty($_COOKIE['panier']['cookie'])) :
                   ?>
                       <tr>
                         <td>Chocolate Cookie</td>
                         <td><?= $_COOKIE['panier']['cookie'] ?></td>
                       </tr>
                   <?php
                       endif;
                   ?>
                   <?php
                      if (!empty($_COOKIE['panier']['M&Ms'])) :
                   ?>
                        <tr>
                          <td>M&Ms Cookie</td>
                          <td><?= $_COOKIE['panier']['M&Ms'] ?></td>
                        </tr>
                   <?php
                      endif;
                   ?>
                   <?php
                      endif;
                   ?>
                  </tbody>
              </table>
</section>



<?php require 'inc/foot.php'; ?>
