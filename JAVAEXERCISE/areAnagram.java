//Write a function to check whether two strings are anagrams.
import java.util.Arrays;
public class AnagramSample  {
   public static void areAnagram(String args[]) {
      String str1 = "recitals";
      String str2 = "articles";

      if (str1.length()==str2.length()) 
      {      
         //sort the array represented by str1
         char[] arr1 = str1.toCharArray();
         Arrays.sort(arr1);
         System.out.println(Arrays.toString(arr1));
        //sort the array represented by str2
         char[] arr2 = str2.toCharArray();
         Arrays.sort(arr2);
         System.out.println(Arrays.toString(arr2));
        //check whether the sorted arrays are equal
         System.out.println(Arrays.equals(arr1, arr2));
        //if they are equal they are anagrams
         if(arr1.equals(arr2)) 
         {
            System.out.println("Given strings are anagrams");
         } 
         //else they are not anagrams
         else {
            System.out.println("Given strings are not anagrams");
         }
      }
   }
}