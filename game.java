import java.lang.Thread;
public class game  {
   
    
    //DISPLAY THE STARTING PAGE
    public void display() throws InterruptedException{
        System.out.println(color.BRIGHT_CYAN+"\t\t\t~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"+color.RESET);
        System.out.println("  \033[1;36m\t\t\t**********WELCOME TO HEROES TURNS! ***********\033[0m   ");
        Thread.sleep(1000);
        System.out.println(color.RED+"                         ^^__     ");
        System.out.println(color.RED+"                        / 0__) "+color.BRIGHT_RED+"PREPARE YOURSELF FOR A FANTASTIC"+color.RESET);
        Thread.sleep(1000);
        System.out.println(color.RED+"               _.----._/ /            "+color.BRIGHT_BLUE+"ROCK"+color.RESET);
        Thread.sleep(1000);
        System.out.println(color.RED+"            /          /              "+color.BRIGHT_GREEN+"PAPER"+color.RESET);
        Thread.sleep(1000);
        System.out.println(color.RED+"        __/  (  |  (  |               "+color.BRIGHT_MAGENTA+"SCISSORS"+color.RESET);
        Thread.sleep(1000);
        System.out.println(color.RED+"        /__.-'|_|--|__|               "+color.BRIGHT_RED+"BATTLE!"+color.RESET);
        Thread.sleep(2000);
        System.out.println();
        System.out.println("\033[1;32m\t\t\t    LETS GO AND EMBARK ON THE BATTLEFIELD!\033[0m ");
        Thread.sleep(2000);
        System.out.print("\033[H\033[2J");
        
    }

    //DISPLAY THE PAGE FOR ENTERING NAMES
    public void displayEnterName()
    {
        System.out.println(color.BRIGHT_MAGENTA+"\t\t\t*********************************************************");
        System.out.println("\t\t\t*                                                       *");
        System.out.println("\t\t\t*    ###############################################    *");
        System.out.println("\t\t\t*    #                                             #    *");
        System.out.println("\t\t\t*    #       Welcome to the Heroes turns Game!     #    *");
        System.out.println("\t\t\t*    #                                             #    *");
        System.out.println("\t\t\t*    ###############################################    *");
        System.out.println("\t\t\t*                                                       *");
        System.out.println("\t\t\t********************************************************"+color.RESET);
        // Dinosaur art with color
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*******************************************************************************"+color.RESET);
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"                        ^^__                                                "+color.BRIGHT_MAGENTA+" *");
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"                        / 0__) ~~"+color.BRIGHT_BLUE+"Please enter the player's name"+color.BRIGHT_MAGENTA+"              *"+color.RESET);
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"               _.----._/ /      "  +color.BRIGHT_BLUE+"  to begin the battle"+color.BRIGHT_MAGENTA+"                       *"+color.RESET);
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"            /          /                                                     "+color.BRIGHT_MAGENTA+"*");
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"        __/  (  |  (  |                                                      "+color.BRIGHT_MAGENTA+"*");
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*"+color.BRIGHT_RED+"        /__.-'|_|--|__|                                                      "+color.BRIGHT_MAGENTA+"*");
        System.out.println(color.BRIGHT_MAGENTA+"\t\t*******************************************************************************"+color.RESET);
      
       
    }

   
    //CLEARS THE SCREEN
    public void clearscreen(){
        System.out.print("\033[H\033[2J");
    }

    // DISPLAY THE ROCK PAPER AND SCISSORS AND PROMPT THE USER TO CHOOSE
    public void displayrps() {
         System.out.println(color.RED + "\t\t\t  [R] ROCK           [P] PAPER              [S]SCISSORS" + color.RESET);
        System.out.println(color.YELLOW+"\t\t\t    _______             _______               _______" );
        System.out.println("\t\t\t---'   ____)       ----'   ____)____      ---'   ____)____" );
        System.out.println("\t\t\t      (_____)                 ______)                ______)" );
        System.out.println("\t\t\t      (_____)                 _______)           __________)" );
        System.out.println("\t\t\t      (____)                _______)            (____)" );
        System.out.println("\t\t\t---.__(___)       ----.__________)        ---.__(___)" + color.RESET);
        System.out.println();
        System.out.println(color.BLUE + "\t\t\tIF WINNER: [R]+10 DAMAGE \t[P] +5 damage\t[S]scissors +15 damage" + color.RESET);
        System.out.print("\n" + color.GREEN + "\t\t\tPick one from the three choices:" + color.RESET);
    }

    //DISPLAY THE ATTRIBUTES OF DINOSAURS
    public void displayDino(){
        System.out.println(color.GREEN+"\t\t\t-----------------------------------------------------------"+color.RESET) ;
        System.out.println(color.RED+"\t\t\t                         [A] TREX THE AGRESSOR\t" );
        System.out.println("\t\t\t                     ___");
        System.out.println("\t\t\t                   / 0__)");
        System.out.println("\t\t\t         _.----._/ /         HEALTH :  100");
        System.out.println("\t\t\t       /          /          POWER  :  15");
        System.out.println("\t\t\t   __/  (  |  (  |           DEFENSE:  5");
        System.out.println("\t\t\t  /__.-'|_|--|__|              REGEN  :  0"+color.RESET);  
        System.out.println(color.GREEN+"\t\t\t----------------------------------------------------------"+color.RESET); 
        System.out.println(color.BLUE+"\t\t\t   \\     /              [D] EAGLE DEFENDER");
        System.out.println("\t\t\t    .-'-.`-.");
        System.out.println("\t\t\t   /  0 0   \\");
        System.out.println("\t\t\t  /    ^     \\  .--.       HEALTH :  100");
        System.out.println("\t\t\t /   (   )   \\/    \\      POWER  :  5");
        System.out.println("\t\t\t/   (     )   |     |       DEFENSE:  15");
        System.out.println("\t\t\t\\    \\___/    |     |     REGEN  :  0");
        System.out.println("\t\t\t \\           /  .--.");
        System.out.println("\t\t\t  `\\        /__/    \\");
        System.out.println("\t\t\t    `\\    /   |     |");
        System.out.println("\t\t\t     /    \\   |     |");
        System.out.println("\t\t\t    /      \\  \\___/"+color.RESET);
        System.out.println(color.GREEN+"\t\t\t-----------------------------------------------------------"+color.RESET);
        System.out.println(color.YELLOW+"\t\t\t / \\__                  [H] DOG THE HEALER");
        System.out.println("\t\t\t(    @\\____                HEALTH : 100");
        System.out.println("\t\t\t /         O                POWER  : 0");
        System.out.println("\t\t\t/   (_____ /                DEFENSE: 5");
        System.out.println("\t\t\t /_____/   U                  REGEN  : 15"+color.RESET);
        System.out.println(color.GREEN+"\t\t\t-----------------------------------------------------------"+color.RESET);
        System.out.print(color.BRIGHT_RED+"\t\t\tPick one from the three choices:"+color.RESET);
    }


    //DISPLAY THE VERSUS FOR SEPERATING THE CHOICE OF EACH PLAYER
    public  void displayVersusRPS() {
         System.out.println();
        System.out.println(color.RED +"\t\t\t_____                   ____   _______________" );
        System.out.println("\t\t\t\\   \\                  /   /   |              |" );
        System.out.println("\t\t\t \\   \\                /   /    |    ______    |" );
        System.out.println("\t\t\t  \\   \\              /   /     |    |    |____|" );
        System.out.println("\t\t\t   \\   \\            /   /      |    |_________" ); 
        System.out.println("\t\t\t    \\   \\          /   /       |              |" +color.RESET);
        System.out.println(color.BLUE+"\t\t\t     \\   \\        /   /        |__________    |" );
        System.out.println("\t\t\t      \\   \\      /   /          _____    |    | " );
        System.out.println("\t\t\t       \\   \\    /   /           |   |    |    |" );
        System.out.println("\t\t\t        \\   \\  /   /            |   |____|    |");
        System.out.println("\t\t\t         \\   \\/   /             |             |" );
        System.out.println("\t\t\t          \\______/              |_____________|" + color.RESET);
        System.out.println();
    }

    //METHOD FOR DETERMINING THE WINNER BASED ON ROCK PAPER SCISSORS
    public String determineWinner(String p1choice, String p2choice)
    {
        String result = " ";
        if(p1choice.equalsIgnoreCase("P") && p2choice.equalsIgnoreCase("R"))
        {
             result= "player 1";
        }

        else if(p1choice.equalsIgnoreCase("P") && p2choice.equalsIgnoreCase("S")){
            result= "player 2";
        }

        else if(p1choice.equalsIgnoreCase("P") && p2choice.equalsIgnoreCase("P")){
            result= "Tie";
        }
        else if(p1choice.equalsIgnoreCase("R") && p2choice.equalsIgnoreCase("P")){
            result= "player 2";
        }
        else if(p1choice.equalsIgnoreCase("R") && p2choice.equalsIgnoreCase("R")){
            result= "Tie";
        }

        else if(p1choice.equalsIgnoreCase("R") && p2choice.equalsIgnoreCase("S")){
            result= "player 1";
        }

        else if(p1choice.equalsIgnoreCase("S") && p2choice.equalsIgnoreCase("P")){
            result= "player 1";
        }

        else if(p1choice.equalsIgnoreCase("S") && p2choice.equalsIgnoreCase("R")){
            result= "player 2";
        }

        else if(p1choice.equalsIgnoreCase("S") && p2choice.equalsIgnoreCase("S")){
            result= "Tie";
        }

        else if(!p1choice.equalsIgnoreCase("P") || !p1choice.equalsIgnoreCase("R") || !p1choice.equalsIgnoreCase("S")){
            result= "player 2";
        }

        else if(!p2choice.equalsIgnoreCase("P") || !p2choice.equalsIgnoreCase("R") || !p2choice.equalsIgnoreCase("S")){
            result= "player 1";
        }
        else{
            result = "Tie";
        }

        

        return result;

        }

       
        //DISPLAY THE HEALTH BAR OF THE HERO/DINO
        public void displayHealthBar(dinosaurs dino)
        {
           
            System.out.println();
            dino.getHealth();
           
            
            System.out.print(dino.getName());
            System.out.println();
            //dino 1 display health
             System.out.print("\t\t\tHEALTH [");
             for(int i = 0; i <= dino.getHealth()/2; i++)
             {
                System.out.print(color.GREEN+"|"+ color.RESET);
             }
             for(int i = dino.getHealth()/2; i < 50; i++)
             {
                System.out.print(color.RED+"-"+color.RESET);
             }
             System.out.print("]"+color.YELLOW+ dino.getHealth()+color.RESET+"/"+color.GREEN+"100"+color.RESET);
             
             }

            //DISPLAY THE ROCK FOR PLAYER 1
                public void displayRock1(){
                
                    System.out.println();
                    System.out.println(color.RED+"\t\t\t\t\t    _______");      
                    System.out.println("\t\t\t\t\t---'   ____)");       
                    System.out.println("\t\t\t\t\t      (_____)");             
                    System.out.println("\t\t\t\t\t      (_____)");    
                    System.out.println("\t\t\t\t\t      (____)");           
                    System.out.println("\t\t\t\t\t---.__(___)"+color.RESET);      
                    System.out.println();              }
                
                //DISPLAY THE ROCK FOR PLAYER 2
                 public void displayRock2(){
                
                   
                    System.out.println();
                            System.out.println(color.BLUE+"\t\t\t\t\t       _______");
                            System.out.println("\t\t\t\t\t      (____   '---");
                            System.out.println("\t\t\t\t\t     (_____)");
                            System.out.println("\t\t\t\t\t     (_____)");
                            System.out.println("\t\t\t\t\t      (____)");
                            System.out.println("\t\t\t\t\t       (___)__.---"+color.RESET);
                            System.out.println();
                 }

                //DISPLAY THE PAPER FOR PLAYER 1
                 public void displayPaper1(){
                    System.out.println();
                    System.out.println(color.RED+"\t\t\t\t\t    _______");
                    System.out.println("\t\t\t\t\t---'   ____)____");
                    System.out.println("\t\t\t\t\t          ______)");
                    System.out.println("\t\t\t\t\t          _______)");
                    System.out.println("\t\t\t\t\t         _______)");
                    System.out.println("\t\t\t\t\t---.__________)"+color.RESET);
                    System.out.println();
                    }
                    //DISPLAY THE PAPER FOR PLAYER 2
                    public void displayPaper2(){
                        System.out.println();
                        System.out.println(color.BLUE+"\t\t\t\t\t        _______");
                        System.out.println("\t\t\t\t\t  ____(____    '---");
                        System.out.println("\t\t\t\t\t (______");
                        System.out.println("\t\t\t\t\t(_______");
                        System.out.println("\t\t\t\t\t(_______");
                        System.out.println("\t\t\t\t\t (__________.---"+color.RESET);
                        System.out.println();
                                            }
            //DISPLAY THE SCISSOR FOR PLAYER 1
                public void displayScissors1(){
                     
                        System.out.println();
                    System.out.println(color.RED+"\t\t\t\t\t    _______");
                    System.out.println("\t\t\t\t\t---'   ____)____");
                    System.out.println("\t\t\t\t\t          ______)");
                    System.out.println("\t\t\t\t\t       __________)");
                    System.out.println("\t\t\t\t\t      (____)");
                    System.out.println("\t\t\t\t\t---.__(___)"+color.RESET);
                    System.out.println();
             }

             //DISPLAY THE SCISSOR FOR PLAYER2
             public void displayScissors2(){
                System.out.println();
                System.out.println(color.BLUE+"\t\t\t\t\t       _______");
                System.out.println("\t\t\t\t\t  ____(____   '---");
                System.out.println("\t\t\t\t\t (______");
                System.out.println("\t\t\t\t\t(__________");
                System.out.println("\t\t\t\t\t     (____)");
                System.out.println("\t\t\t\t\t       (___)__.---"+color.RESET);
                System.out.println();
     }

     //DISPLAY THE CHOICE OF THE PLAYER
     public void displayPlayer1Choice(String choice, game game)
     {
        switch(choice){
            case "R":
                game.displayRock1();
            break;
            
            case "S":
                game.displayScissors1();
            break;
            
            case "P":
                game.displayPaper1();
            break;
            default: System.out.println("INVALID CHOICE");
        }
     }

     public void displayPlayer2Choice(String choice, game game)
     {
        switch(choice){
            case "R":
                game.displayRock2();
            break;
            
            case "S":
                game.displayScissors2();
            break;
            
            case "P":
                game.displayPaper2();
            break;
            default: System.out.println("\t\t\t\t\tINVALID CHOICE");
        }
     }

     //SIMPLE ANIMATION OF DINOSAUR
     public void displayanimation(String hero, String enemy ) throws InterruptedException
     {

        int dinoPosition = 0;
        int enemyPosition = 30;

        while (dinoPosition < enemyPosition) {
            // Clear screen
            System.out.print("\033[H\033[2J");
            System.out.flush();

            // Print spaces for Dino position
            for (int i = 0; i < dinoPosition; i++) {
                System.out.print(" ");
            }
            System.out.print(hero);

            // Print spaces between Dino and Enemy
            for (int i = dinoPosition + hero.length(); i < enemyPosition; i++) {
                System.out.print(" ");
            }
            System.out.println(enemy);

            // Move Dino closer
            dinoPosition++;

            // Pause for animation
            Thread.sleep(100);
        }

     }

     //METHOD FOR DETERMINING THE DAMAGE DEALTH BY THE WINNER
     public int damageDealth(int attack, dinosaurs dino){
        int damage = 0;
        if(attack > dino.getDefense()){
            damage = attack - dino.getDefense();
        }
        else if(attack < dino.getDefense()){
                damage =dino.getDefense() - attack;
        }
        else if(attack == dino.getDefense()){
            damage = dino.getDefense() - attack;
    }
       
        return damage;
     }

     //METHOD FOR DISPLAYING THE NUMBER OF ROUNDS, HERO WHO WON THE BATTLE
     public void displayEndWinner(player player, dinosaurs won, dinosaurs lose, int round) throws InterruptedException{
        Thread.sleep(1000);
        System.out.println(color.BRIGHT_RED+"\t\t\t\t\t*** TOTAL NUMBER OF ROUNDS: "+round+color.RESET+color.BRIGHT_RED+"*** ");
        Thread.sleep(1000);
        System.out.println(color.BRIGHT_GREEN+"\t\t\t\t\t*** " + player.getplayerName()+ " WON THE BATTLE! ***"+color.RESET);
        Thread.sleep(1000);  
        
        System.out.println(color.BRIGHT_GREEN+"\t\t\t\t "+won.getName() +" IS THE LAST HERO STANDING !!"+color.RESET);
        System.out.println(color.BRIGHT_RED+"\t\t\t***************************************************************");
        won.displayhero();
        System.out.println();
        lose.displayHeroDestroyed();


           


     }

     //DISPLAY SIMPLE TEXT ANIMATION OF RPS
     public void displayRPSwithTHREAD()throws InterruptedException
     {
        System.out.println(color.GREEN+"\n\t\t\t\t\t Ready..."+color.RESET);
        Thread.sleep(1000);
        for (int i = 0; i < 3; i++) {
            System.out.print(color.RED+"\t\t\t\tRock..."+color.RESET);
            Thread.sleep(500);
            System.out.print(color.BLUE+"Paper..."+color.RESET);
            Thread.sleep(500);
            System.out.print(color.CYAN+"Scissors...\n"+color.RESET);
            Thread.sleep(500);
            }
            System.out.print(color.BRIGHT_GREEN+"\t\t\t\t\tTHE RESULT IS...\n"+color.RESET);
            Thread.sleep(500);
            System.out.print("\033[H\033[2J");
     }
     //PROMP THE USER IF THEY WANT TO PLAY AGAIN
     public void displayAgain()
     {
        System.out.println(color.BLUE+"\t\t\t\t*****************************************");
        System.out.println("\t\t\t\t*       Do you want to play again?      *");
        System.out.println("\t\t\t\t*               [Y]YES                  *");
        System.out.println("\t\t\t\t*               [N]NO                   *");
        System.out.println("\t\t\t\t*****************************************");
        System.out.print("\t\t\t\tYour choice: "+color.RESET);
     }
     //ENDING IF THE USER EXITS THE GAME
     public void displayEndingPage() {
        System.out.println("\n\n");
        System.out.println(color.BRIGHT_BLUE+"\t\t\t\t************************************************");
        System.out.println("\t\t\t\t*                                             *"+color.RESET);
        System.out.println(color.BLUE+"\t\t\t\t*               N A I S U  ! ! !               *"+color.RESET);
        System.out.println(color.BRIGHT_BLUE+"\t\t\t\t*                                              *");
        System.out.println("\t\t\t\t************************************************"+color.RESET);
        System.out.println(color.BLUE+"\t\t\t\t             Thank you for playing!             "+color.RESET);
        System.out.println(color.BRIGHT_BLUE+"\t\t\t\t************************************************"+color.RESET);
        System.out.println("\n\n");
    }
    

     

   
                    
                 
                 

             
                   
                
            
            

        



        

      

    



    
}
