<?php  
        $conferming_pending_quary = "SELECT *
        FROM `user`
        WHERE user.id IN (
            SELECT follow.id_follow
            FROM `follow`  
            WHERE not follow.id_follow = $My_id  and 
            follow.id_follow not in (
                SELECT follow.id_user
                FROM follow
                WHERE follow.id_follow=$My_id
            )
        )
        AND not user.id =$My_id";

        $not_yet_Conferming_users = mysqli_query($conn, $conferming_pending_quary);

        if (mysqli_num_rows($not_yet_Conferming_users) > 0) {
        ?>
            <h4>You have request the follower</h4>
            <div class="col-md-3">
                <table>
                    <?php
                    while ($i = mysqli_fetch_assoc($not_yet_Conferming_users)) {
                        $id = $i['id'];
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