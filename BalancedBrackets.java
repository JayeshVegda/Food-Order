// Java program for checking
// balanced brackets
import java.util.*;

public class BalancedBrackets {

	// function to check if brackets are balanced
	static boolean areBracketsBalanced(String expr)
	{
		// Using ArrayDeque is faster than using Stack class
		Deque<Character> stack = new ArrayDeque<Character>();

		// Traversing the Expression
		for (int i = 0; i < expr.length(); i++) {
			char x = expr.charAt(i);

			if (x == '(' || x == '[' || x == '{') {
				stack.push(x);
				continue;
			}
			if (stack.isEmpty())
				return false;
			char check;
			switch (x) 
			{
			case ')':
				check = stack.pop();
				if (check == '{' || check == '[')
					return false;
				break;

			case '}':
				check = stack.pop();
				if (check == '(' || check == '[')
					return false;
				break;

			case ']':
				check = stack.pop();
				if (check == '(' || check == '{')
					return false;
				break;
			}
		}

		// Check Empty Stack
		return (stack.isEmpty());
	}

	// Driver code
	public static void main(String[] args)
	{
		String expr = "(][)";

		// Function call
		if (areBracketsBalanced(expr))
			System.out.println("Balanced ");
		else
			System.out.println("Not Balanced ");
	}
}