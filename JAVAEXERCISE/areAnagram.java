   //1. Write a function to detect if two strings are anagrams(3 marks).
   //ANSWER:
   
   static boolean areAnagram(char[] str1, char[] str2) 
    { //anagrams are strings that can be rearranged to look the same. eg Dormitory and Dirtyroom
        // Get lenghts of both strings inputs
        int string1len = str1.length; 
        int string2len = str2.length; 
   
        // If length of both strings input is not same, 
        // then they cannot be anagram 
        if (string1len != string2len) 
            return false; 
   
        // Sort both strings 
        quickSort(str1, 0, string1len - 1); 
        quickSort(str2, 0, string2len - 1); 
   
        // Compare sorted strings 
        for (int i = 0; i < string1len;  i++) 
            if (str1[i] != str2[i]) 
                return false; 
   
        return true; 
    } 