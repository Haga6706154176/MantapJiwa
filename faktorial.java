import java.util.Scanner;

public class Main {

     public static void main(String[] args)
     {
         System.out.print("Enter a number: ");
         Scanner input = new Scanner(System.in);
         int num = input.nextInt();
         long factorialResult = factorialRecursive(num);
         System.out.println(factorialResult);
     }


     public static long factorialRecursive(int n) {
         if (n == 0 || n == 1 )
             return 1;

         return n * factorialRecursive(n - 1);
     }
}