import java.util.Scanner;
import java.lang.Thread;


public class Main{
 public static void main(String[] args) throws InterruptedException{
     Scanner s = new Scanner(System.in);
     try { 
         
      String ans = "";
      game game = new game();
        game.display();
        String playerNames[] = new String[2];
        int win1 =0;
        int win2 = 0;
          do{
       //DISPLAYS THE FRONT PAGE     
       game.displayEnterName();

       //PROMPT THE PLAYERS TO ENTER THEIR NAMES
        for(int i = 0; i<2; i++){
          System.out.print(color.BLUE+"\t\t\tEnter Player " + (i+1)+"'s name:"+color.RESET );
         playerNames[i]= s.nextLine();
         System.out.println(color.BRIGHT_MAGENTA+"\t\t\t********************************************************"+color.RESET);
        }
       
        //ARRAY FOR STORING PLAYER NAMES
        player p1 = new player(playerNames[0]);
        player p2 = new player(playerNames[1]);

        //ARRAY OF OBJECT
        player players[] =new player[2];
        players[0] = p1;
        players[1]= p2;


        dinosaurs dino1 = null;
        dinosaurs dino2 = null;
        int ap;
        int ap2;
        
        int round = 0;
       

        Thread.sleep(500);
        System.out.print("\033[H\033[2J");
       
          
          for(int i = 0; i<2; i++)
        {
            System.out.println(color.BLUE+"\t\t\t\t\tPlayer "+(i+1)+" "+ players[i].getplayerName()+" CHOOSE YOUR HERO\n "+color.RESET);
            game.displayDino();
            
            players[i].choiceDino = s.nextLine();
          
            Thread.sleep(500);
            System.out.print("\033[H\033[2J");
            System.out.print(color.GREEN+"\t\t\t\t\tSAVING "+playerNames[i] +"'S CHOICE...."+color.RESET);
            Thread.sleep(1000);
            System.out.print("\033[H\033[2J");
            
        }
        
        //INITIALIZED HERO BASED ON THE USER'S CHOICE
        if(players[0].choiceDino.equalsIgnoreCase("A") )
        {
             dino1 = new aggressor(color.RED+"TREX THE AGGRESSOR", 100, 15, 5, 0, "( 0_\\"+color.RESET);
             
             
        }

        else if(players[0].choiceDino.equalsIgnoreCase("D") )
        {
             dino1 = new defender(color.RED+"EAGLE DEFENDER", 100, 5, 15, 0, "0^0"+color.RESET);
            
        }

        else if(players[0].choiceDino.equalsIgnoreCase("H") )
        {
             dino1 = new healer(color.RED+"DOG HEALER", 100, 0, 5, 15, "{*_)~~"+color.RESET);
             
        }

         if(players[1].choiceDino.equalsIgnoreCase("A") )
        {
             dino2 = new aggressor(color.BLUE+"TREX THE AGGRESSOR", 100, 15, 5, 0, "( 0_\\"+color.RESET);
             
        }

        if(players[1].choiceDino.equalsIgnoreCase("D") )
        {
             dino2 = new defender(color.BLUE+"EAGLE THE DEFENDER", 100, 5, 15, 0, "0^0"+color.RESET);
             
        }

        if(players[1].choiceDino.equalsIgnoreCase("H") )
        {
             dino2 = new healer(color.BLUE+"DOG THE HEALER", 100, 0, 5, 15, "{*_)~~"+color.RESET);
             
        }



      //DO WHILE HERO HEALTH IS GREATER THAN ZERO 
      do{

   
 
        //PROMP THE USER TO CHOOSE ROCK, PAPER OR SCISSORS
        for(int i = 0; i<2; i++)
            {System.out.println();
                System.out.println(color.BRIGHT_BLUE+"\t\t\t\t\tPlayer "+(i+1)+" "+ players[i].getplayerName()+"'s  turn\n "+color.RESET);
                game.displayrps();
                players[i].choice = s.nextLine();
                Thread.sleep(1000);
                System.out.print("\033[H\033[2J");
                if(i ==1)
                {
                    break;
                }
                System.out.print(color.GREEN+"\t\t\t\t\tSWITCHING PLAYER..."+color.RESET);
                Thread.sleep(1000);
                System.out.print("\033[H\033[2J");
                
            }
           
            Thread.sleep(1000);
            System.out.print("\033[H\033[2J");
            
     // SIMPLE ANIMATION OF ROCK PAPER SCISSORS
        game.displayRPSwithTHREAD();
           
        
    //DISPLAY THE RESULT AND WINNER OF THE ROUND
          System.out.println(color.RED+"\t\t\t\t\t\t"+p1.getplayerName());
          game.displayPlayer1Choice(p1.choice, game);
          game.displayVersusRPS();
          System.out.println(color.BLUE+"\t\t\t\t\t\t"+p2.getplayerName());
          game.displayPlayer2Choice(p2.choice, game);
         
         String winner= game.determineWinner(players[0].choice, players[1].choice);
         
            
        Thread.sleep(2000);
            
          String arrow = "~~~-->>>)";

            //DEALS DAMAGE AND HEAL BASED ON THE WINNER OF RPS
             if(winner.equalsIgnoreCase("player 1")){
             win1++;
             win2 = 0;
             System.out.println();
             Thread.sleep(2000);
               System.out.println(color.GREEN+"\t\t\t\t\t\t"+p1.getplayerName()+" WINS!"+color.RESET);
                 ap = (dino1.attack(dino1.attackPower(players[0].choice)));
               dino1.heal();
             
             System.out.println("\t\t\t\t"+dino1.getName()+" IS ATTACKING "+ dino2.getName());
             Thread.sleep(2000);

             game.displayanimation(dino1.icon + arrow, dino2.icon + dino2.getName());
             //DOUBLE THE DAMAGE IF PLAYER WON FOR TWO CONSECUTIVE ROUND
             if(win1 >= 2 && win2 == 0){
               ap *= 2;
              
               System.out.println(color.CYAN+"\t\t\t\tULTIMATE UNLOCKED!, "+dino1.getName()+" DOUBLE DAMAGE: "+ ap+color.RESET);
               Thread.sleep(3000);
               System.out.println();
             }
             dino2.minushealth(ap);
             System.out.println(color.RED+"\t\t\t"+dino1.getName()+" DEALS "+ game.damageDealth(ap, dino2) + " to " + dino2.getName()+color.RESET);
             Thread.sleep(1000);
            
            
             }

             else if(winner.equalsIgnoreCase("player 2")){
               win2++;
               win1 =0;
               System.out.println();
               Thread.sleep(2000);
               System.out.println(color.GREEN+"\t\t\t\t\t\t"+p2.getplayerName()+" WINS !"+color.RESET);
                ap2 = (dino2.attack(dino2.attackPower(players[1].choice)));
              dino2.heal();
            
            
            System.out.println(color.BLUE+"\t\t\t\t"+dino2.getName()+" IS ATTACKING "+ dino1.getName()+color.RESET);
            Thread.sleep(2000);

            game.displayanimation(dino2.icon + arrow , dino1.icon + dino1.getName());
            //DOUBLE THE DAMAGE IF THE PLAYER WON FOR TWO CONSECUTIVE ROUND
            if(win2 >= 2 && win1 == 0){
               ap2 *= 2;
             
               System.out.println(color.CYAN+"\t\t\t\tULTIMATE UNLOCKED!, "+dino1.getName()+" DOUBLE DAMAGE: "+ ap2+color.RESET);
               Thread.sleep(3000);
               System.out.println();
             }
             dino1.minushealth(ap2);
            System.out.println(color.BLUE+"\t\t\t"+dino2.getName()+" DEALS "+ game.damageDealth(ap2, dino1) + " to " + dino1.getName());
             Thread.sleep(1000);
          }

        

          else{
               System.out.print("\t\t\t\t\t\tITS A TIE!");
               Thread.sleep(1000);
          }

          
          //UPDATES THE HEALTH OF EACH HERO
          System.out.print("\033[H\033[2J");
          System.out.println(color.BLUE+"\t\t\t******************************************************************"+color.RESET);
          System.out.println();
          game.displayHealthBar(dino1);
          dino1.displayhero();
          System.out.println(color.BLUE+"\t\t\t******************************************************************"+color.RESET);
          System.out.println();
          game.displayHealthBar(dino2);
          dino2.displayhero();
          System.out.println(color.BLUE+"\t\t\t******************************************************************"+color.RESET);
          System.out.println();

          round++;
          //CONTINUE THE GAME AS LONG AS THE HEALTH IS GREATER THAN ZERO
          }while(dino1.getHealth() > 0 && dino2.getHealth() > 0);
          
          System.out.print("\033[H\033[2J");
          //DISPLAYS THE WINNER
          if(dino1.getHealth() > dino2.getHealth())
          {
             game.displayEndWinner(p1, dino1, dino2, round);  

          }
          else{
               game.displayEndWinner(p2, dino2, dino1, round);  
          }
    //PROMPT THE USER IF THEY WANT TO PLAY AGAIN
     game.displayAgain();
     ans = s.nextLine();
     Thread.sleep(1000);
     System.out.print("\033[H\033[2J");
     }while(ans.equalsIgnoreCase("y"));

     //DISPLAY THE ENDING PAGE OR EXIT PAGE
     game.displayEndingPage();

     //FOR EXCEPTION HANDLING
        } catch (Exception e) {
          System.out.println();
         System.out.println(color.RED+"\t\t\t\t\tSOMETHING WENT WRONG."+color.RESET);
        }
        finally{
          
          s.close();
        }
 }
   
}
