public class healer extends dinosaurs {
    
    public healer(String name, int health, int power, int defense, int heal, String icon)
    {
        super(name, health, power, defense, heal, icon);
    }
@Override
  

    public void displayhero() {
        // ANSI escape codes for colors
        final String RESET = "\u001B[0m";   // Reset to default
        final String BROWN = "\u001B[33m";  // Brown for the body
        final String BLACK = "\u001B[30m";  // Black for darker details
        final String WHITE = "\u001B[37m";  // White for highlights
    
        System.out.println();
        System.out.println(BROWN + "\t\t\t\t\t / \\__                  " + RESET);               // Body (Brown)
        System.out.println(BLACK + "\t\t\t\t\t(    @\\____             " + RESET);              // Head with black details
        System.out.println(BROWN + "\t\t\t\t\t /         " + WHITE + "O" + BROWN + "             " + RESET);    // Eye (White O)
        System.out.println(BROWN + "\t\t\t\t\t/   " + BLACK + "(_____" + BROWN + " /              " + RESET);  // Back leg with black
        System.out.println(BROWN + "\t\t\t\t\t/_____/   " + BLACK + "U" + RESET);                // Tail with black
    }
    

  

public void displayHeroDestroyed() {
    // ANSI escape codes for colors
    final String RESET = "\u001B[0m";    // Reset to default color
    final String BROWN = "\u001B[33m";   // Brown for the body
    final String RED = "\u001B[31m";     // Red for damage (x marks)

    System.out.println();
    System.out.println(RED + "\t\t\t\t\t x   x__                  " + RESET);            // Damaged front
    System.out.println(RED + "\t\t\t\t\t x  x " + BROWN + "@" + RED + "\\___   xx          " + RESET);   // Damaged head
    System.out.println(RED + "\t\t\t\t\t x     x x      x         " + RESET);            // Damaged mid-section
    System.out.println(RED + "\t\t\t\t\t  x   (" + BROWN + "___x__" + RED + "  x          " + RESET);   // Damaged back
    System.out.println(RED + "\t\t\t\t\t   xxxxxx/            " + RESET);                // Destroyed tail
    System.out.println(RED + "\t\t\t\t\t      x      x             " + RESET);           // Scattered debris or final destruction
}


 

    


   
        


    
}
