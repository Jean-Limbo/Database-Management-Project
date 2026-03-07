
public   abstract class dinosaurs{
     private String name;
     private int health;
     private int power;
      private int defense;
     private int heal;
     String icon;
    


  //CONSTRUCTOR OF DINOSAUR/HERO
    public dinosaurs(String name, int health, int power, int defense, int heal,String icon)
    {this.name = name;
      this.health = health;
      this.power = power;
      this.defense = defense;
      this.heal = heal;
      this.icon = icon;
    

    }

    
   
    public int getPower(){
      return this.power;
    }
   
    public void setPower(int power){
      this.power = power;
    }
    
    public int getDefense(){
      return this.defense;
    }

    public void setDefense(int defense){
      this.defense = defense;
    }

    public int getHealth()
    {
      return this.health;
    }

    public void setHealth(int health)
    {
      this.health = health;
    }

    public String getName(){
      return this.name;
    }

    public void setName(String name){
      this.name = name;
    }


    //METHOD FOR DEDUCTING HEALTH OF THE HERO
    public int minushealth(int attackPower){
        
      if(attackPower > getDefense()){
      attackPower = attackPower - getDefense();
      setHealth(getHealth() - attackPower);
    }
  else{
      setDefense(getDefense() - attackPower); 
      setHealth(getHealth() - getDefense());
  }
      return getHealth();
  }
  //ATTACK POWER IS BASED ON THE DAMAGE OF THE ROCK, PAPER OR SCISSORS
    public  int attackPower(String winnerChoice){
     int attackPower = 0;
      if(winnerChoice.equalsIgnoreCase("P")){
          attackPower = 5;
        }

       else  if(winnerChoice.equalsIgnoreCase("R")){
          attackPower = 10;
        }
        else if(winnerChoice.equalsIgnoreCase("S")){
          attackPower = 15;
        }
        return attackPower;
        
       
        
    }
    //POWER OF THE HERO PLUS THE DAMAGE OF ROCK PAPER SCISSORS
    public int attack(int attackpower)
    {
        int power = this.power+ attackpower;
        return power;
    }
    //METHOD FOR REGEN OF HEALTH
    public int heal()
    {
        this.health = this.health + this.heal ;
        if(this.health > 100) this.health = 100;
        return this.health;
    }

    public void displayhero(){};

  public void displayHeroDestroyed(){};

  

  
  

    

    

    
    
}