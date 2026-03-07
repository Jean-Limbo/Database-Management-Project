public class defender extends dinosaurs {
 
    public defender(String name, int health, int power, int defense, int heal, String icon)
    {
        super(name, health, power, defense, heal, icon);
        
    }
    
   
@Override
public void displayhero() {
    // ANSI escape codes for colors
    final String RESET = "\u001B[0m"; // Reset to default
    final String WHITE = "\u001B[37m"; // White for the head
    final String YELLOW = "\u001B[33m"; // Yellow for the beak
    final String BROWN = "\u001B[31m"; // Brown (using red as a substitute)
    final String CYAN = "\u001B[36m"; // Cyan for details/accessories

    System.out.println();
    System.out.println(CYAN + "\t\t\t\t\t   \\     /              " + RESET); // Wings (cyan)
    System.out.println(WHITE + "\t\t\t\t\t    .-'-.`-." + RESET); // Head (white)
    System.out.println(WHITE + "\t\t\t\t\t   /  0 0   \\" + RESET); // Eyes (white head)
    System.out.println(YELLOW + "\t\t\t\t\t  /    ^     \\  .--.        " + RESET); // Beak (yellow)
    System.out.println(BROWN + "\t\t\t\t\t /   (   )   \\/    \\     " + RESET); // Chest/body (brown)
    System.out.println(BROWN + "\t\t\t\t\t/   (     )   |     |       " + RESET); // Body (brown)
    System.out.println(BROWN + "\t\t\t\t\t\\    \\___/    |     |     " + RESET); // Lower body (brown)
    System.out.println(CYAN + "\t\t\t\t\t \\           /  .--." + RESET); // Wing extensions (cyan)
    System.out.println(CYAN + "\t\t\t\t\t `\\        /__/    \\" + RESET); // Feathers (cyan)
    System.out.println(BROWN + "\t\t\t\t\t    `\\    /   |     |" + RESET); // Legs/body (brown)
    System.out.println(BROWN + "\t\t\t\t\t     /    \\   |     |" + RESET); // Legs/body (brown)
    System.out.println(BROWN + "\t\t\t\t\t    /      \\  \\___/" + RESET); // Tail (brown)
}

  

    public void displayHeroDestroyed() {
     
        final String RESET = "\u001B[0m"; // Reset to default
        final String WHITE = "\u001B[37m"; // White for the head
        final String YELLOW = "\u001B[33m"; // Yellow for the beak
        final String BROWN = "\u001B[31m"; // Brown (using red for the body)
        final String CYAN = "\u001B[36m"; // Cyan for accessories
        final String RED = "\u001B[31m"; // Red for damage (x marks)
    
        System.out.println();
        System.out.println(CYAN + "\t\t\t\t\t   \\  " + RED + "x" + CYAN + "  /              " + RESET); // Wings with red "x"
        System.out.println(WHITE + "\t\t\t\t\t    .-'-" + RED + "x" + WHITE + "`-." + RESET); // Damaged head
        System.out.println(WHITE + "\t\t\t\t\t   /  " + RED + "x x" + WHITE + "   \\" + RESET); // Damaged eyes
        System.out.println(YELLOW + "\t\t\t\t\t  /    ^     \\" + RED + "   .--x        " + RESET); // Beak with damage
        System.out.println(BROWN + "\t\t\t\t\t /   (   )   \\/     \\" + RESET); // Body
        System.out.println(BROWN + "\t\t\t\t\t/   (  " + RED + "x" + BROWN + "  )   |     |       " + RESET); // Damaged body
        System.out.println(BROWN + "\t\t\t\t\t\\    \\___/    |  " + RED + "x" + BROWN + "  |     " + RESET); // Damaged body
        System.out.println(CYAN + "\t\t\t\t\t \\     " + RED + "x" + CYAN + "     /  .--" + RED + "x" + RESET); // Wing extension with damage
        System.out.println(CYAN + "\t\t\t\t\t  `\\        /__/    \\" + RESET); // Feathers
        System.out.println(BROWN + "\t\t\t\t\t    `\\    " + RED + "x" + BROWN + "   |     |" + RESET); // Legs with damage
        System.out.println(BROWN + "\t\t\t\t\t     /   " + RED + "x" + BROWN + " \\  |  " + RED + "x" + BROWN + "  |" + RESET); // Legs with damage
        System.out.println(BROWN + "\t\t\t\t\t    /   " + RED + "x   " + BROWN + "\\  \\___/" + RESET); // Tail with damage
    }
    
    
    
}
