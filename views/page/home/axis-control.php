


<main >
    
                <!-- Contrôle des axes XYZ -->
                <div class="axis-control">
                    <h2>Contrôle des Axes XYZ</h2>


                                <h3 class="text-center" >Deplacer vos Axe X - Y - Z</h3>


                                <div class="row row-cols-4">
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 10)">X +10</button>
                                            </div>

                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -10)">X -10</button>
                                            </div>

                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 5))">X +5</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -5)">X -5</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 1)">X +1</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -1)">X -1</button>
                                            </div>
  
                                </div>_



                                <div class="row">

                                       <div class="col">                                           
                                            <button  onclick="moveAxis('Y', 10)">Y +10</button>
                                       </div>                                              
                                        
                                       <div class="col">
                                            <button   onclick="moveAxis('Y', -10)">Y -10</button>
                                       </div>
                                       
                                       <div class="col">
                                            <button  class onclick="moveAxis('Y', 5))">Y +5</button>
                                       </div>                                              
                              
                                 </div>


                                 <div class="d-grid gap-3 d-md-block">
                                            
                                    
                                            <button  onclick="moveAxis('Y', -5)">Y -5</button>
                                   
                                  
                                            <button  onclick="moveAxis('Y', 1)">Y +1</button>
                                           
                                    
                                            <button  conclick="moveAxis('Y', -1)">Y -1</button>
                                
                                </div>
                                
                                            


                                           

                               

                                <div class="row row-cols-4">
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 10)">X +10</button>
                                            </div>

                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -10)">X -10</button>
                                            </div>

                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 5))">X +5</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -5)">X -5</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', 1)">X +1</button>
                                            </div>
                                            
                                            <div class="col">
                                            <button class="btn btn-primary rounded" onclick="moveAxis('X', -1)">X -1</button>
                                            </div>
                                            


                                           

                                </div>


                </div>

                <!-- Homming -->
                <div class="homming">
                    <h2>Homming</h2>
                    <button onclick="performHomming()">Lancer l'Homming</button>
                </div>

                <!-- Ouverture/Fermeture de la CNC -->
                <div class="cnc-control">
                    <h2>Commandes CNC</h2>
                    <button onclick="openCNC()">Ouvrir la CNC</button>
                    <button onclick="closeCNC()">Fermer la CNC</button>
                </div>

                <script src="cnc_control.js"></script>

</main> 