public class aggressor extends dinosaurs{
    
    public aggressor(String name, int health, int power, int defense, int heal, String icon )
    {
        super(name, health, power, defense, heal, icon);
        
    }

    String icon = " ( 0_\\";


@Override
    //ATTACK POWER OF THE HERO
    public int attack(int attackpower)
    {
        
        int power;
        power = getPower() + attackpower;
        return power;
    }

   

 
@Override
    public void displayhero() {
        // ANSI escape codes for colors
        final String RESET = "\u001B[0m";
        final String RED = "\u001B[31m";
        final String GREEN = "\u001B[32m";
        final String YELLOW = "\u001B[33m";
        final String BLUE = "\u001B[34m";
        final String CYAN = "\u001B[36m";
    
        System.out.println();
        System.out.println(GREEN + "\t\t\t\t\t                     ___" + RESET); // Head in green
        System.out.println(YELLOW + "\t\t\t\t\t                   / 0__)" + RESET); // Face in yellow
        System.out.println(RED + "\t\t\t\t\t         _.----._/ /      " + RESET); // Arms in red
        System.out.println(CYAN + "\t\t\t\t\t       /          /       " + RESET); // Body in cyan
        System.out.println(BLUE + "\t\t\t\t\t   __/  (  |  (  |         " + RESET); // Lower body in blue
        System.out.println(RED + "\t\t\t\t\t  /__.-'|_|--|__|          " + RESET); // Base in red
    }
    

  

    public void displayHeroDestroyed() {
        // ANSI escape codes for colors
        final String RESET = "\u001B[0m";
        final String RED = "\u001B[31m";
        final String YELLOW = "\u001B[33m";
        final String BLUE = "\u001B[34m";
        final String CYAN = "\u001B[36m";
    
        System.out.println();
        System.out.println(RED + "\t\t\t\t\t                     ___" + RESET); // Head in red
        System.out.println(YELLOW + "\t\t\t\t\t                   / x x \\" + RESET); // Eyes in yellow
        System.out.println(RED + "\t\t\t\t\t         _.xx.._x_/ /      " + RESET); // Arms and upper body in red
        System.out.println(CYAN + "\t\t\t\t\t       /   x   x  /        " + RESET); // Torso in cyan
        System.out.println(BLUE + "\t\t\t\t\t   xx_/   x   x  |         " + RESET); // Lower body in blue
        System.out.println(RED + "\t\t\t\t\t  /__.-'|_|--x--x|    x    " + RESET); // Base in red
        System.out.println(YELLOW + "     x     x   x           " + RESET); // Scattered debris in yellow
    }
    
    

    



    
}
