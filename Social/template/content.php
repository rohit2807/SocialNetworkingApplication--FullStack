  <div id="content">
            <div>
                <img src="images/image1.png" style="float:left;"/>
            </div>
            <div id="form2">
                <form action="" method="post">
                <h2>Sign Up Here</h2>
                    <table>
                        <tr>
                            <td align="right">Name:</td>
                            <td>
                                <input type="text" name="u_name" placeholder="Enter your name" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Password:</td>
                            <td>
                                <input type="password" name="u_pass" placeholder="Enter your password" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Email:</td>
                            <td>
                                <input type="email" name="u_email" placeholder="Enter your Email" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" >Country:</td>
                            <td>
                                <select name="u_country" required="required">
                                    <option> Select a Country</option>
                                    <option> India</option>
                                    <option> United States</option>
                                    <option> UAE</option>
                                    <option> United Kingdom</option>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" required="required">Gender:</td>
                            <td>
                                <select name="u_gender" >
                                    <option> Select a Gender</option>
                                    <option> Male</option>
                                    <option> Female</option>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" required="required">Birthday:</td>
                            <td>
                                <input type="date" name="u_birthday" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <button name="sign_up">Sign Up</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php 
                include("user_insert.php");
                ?>
            </div>
        </div>