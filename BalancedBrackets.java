
class Solution {
    public static boolean isValid(String s) {
        int n = s.length();
      
        char open_para[] = {'(', '{' , '['}; //n = 2
        char close_para[] = {']', ')', '}',}; //n = 2
        int open = 0;
        int close = 0;

        //string check
        for(int i = 0; i<n; i++){
           char temp =  s.charAt(i);
           System.out.println();
            System.out.println("Current Poistion : " + temp);

           //open check
           for(int j=0; j<open_para.length; j++){


            if(temp == open_para[j]){
                switch (open_para[j]) {
                    case '(':
                        open = open + 1;
                        break;
                    case '[':
                        open = open + 2;
                        break;
                    case '{':
                        open = open + 3;
                        break;
                    default:
                        break;
                }
                // System.out.println("open_para" + temp + ", " + open_para[j]);
            }

           }

           //close check
           for(int j = 0; j<close_para.length; j++){
            if(temp == close_para[j]){
                switch (close_para[j]) {
                    case ')':
                        close = close + 1;
                        break;
                    case ']':
                        close = close + 2;
                        break;
                    case '}':
                         close = close + 3;
                        break;
                    default:
                        break;
                }
                // System.out.println("close_para" + temp + ", " + close_para[j]);
            }
           }

        }

       
            System.out.println("OPEN FINAL : " + open + ", ");
            System.out.println("Close FINAL : " + close+ ", ");
            System.out.println();
       

        if(open != close){
            return false;
        }

        return true;
    }

    public static void main(String[] args){
        String s = "[]([])";
        System.out.println(isValid(s));
    }
}