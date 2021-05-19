// If the submit button has been pressed
            if(isset($_GET['submit']))
            {
                // Check number values
                if(is_numeric($_GET['number1']) && is_numeric($_GET['number2']))
                {
                    // Calculate total
                    if($_GET['operation'] == '+')
                    {
                        $total = $_GET['number1'] + $_GET['number2'];	
                    }
                    if($_GET['operation'] == '-')
                    {
                        $total = $_GET['number1'] - $_GET['number2'];	
                    }
                    if($_GET['operation'] == '*')
                    {
                        $total = $_GET['number1'] * $_GET['number2'];	
                    }
                    if($_GET['operation'] == '/')
                    {
                        $total = $_GET['number1'] / $_GET['number2'];	
                    }
                    
                    // Print total to the browser
                    echo "<h1>{$total}</h1>";
                
                } else {
                    
                    // Print error message to the browser
                    echo 'Numeric values are required';
                
                }
            }