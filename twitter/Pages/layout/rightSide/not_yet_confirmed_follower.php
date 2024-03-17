<?php  
        $conferming_pending_quary = "SELECT user.id AS 'id',user.username AS 'username',user.profile_picture AS 'profile_picture',user.at_user_name AS 'at_user_name'
                            FROM user join follow 
                            on user.id=follow.id_follow
                            WHERE follow.id_user=$My_id";

        
        $not_yet_Conferming_users = mysqli_query($conn, $conferming_pending_quary);

        $count_following= "SELECT count(follow.id_follow) as 'count_followers' FROM follow WHERE follow.id_user=$My_id";

        $countGetFOllowings=mysqli_query($conn, $count_following);
        $row_count = mysqli_fetch_assoc($countGetFOllowings);
        $count_following_value = $row_count['count_followers'];
        $count_following_string = strval($count_following_value);
    
        if (mysqli_num_rows($not_yet_Conferming_users) > 0) {
        ?>
         
            <h4>My Following Lists(<?php echo "$count_following_string"; ?>)</h4>
            <div class="col-md-3">
                <table>
                    <?php
                    while ($i = mysqli_fetch_assoc($not_yet_Conferming_users)) {
                        $conferedNotFollowerId = $i['id'];
                        $at_user_name = $i['at_user_name'];
                        $username = $i['username'];
                        $profilePicture = $i['profile_picture'];
                        if ($profilePicture == null) {
                            $profilePicture = 'download.png';
                        }
                    ?>
                        <tr>
                            <th>
                                <img id="profile" src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
                            </th>
                            <th>
                                <label class="username" for=""><?php echo $username; ?></label><br>
                                <label class="username_at" for=""><?php echo $at_user_name; ?></label>

                            </th>
                            <th>
                            <input class="btn  folow_button" type="button" onclick="" value="Following">
                            </th>
                        </tr>

                <?php
                    }
                }
                ?>
                </table>
            </div>