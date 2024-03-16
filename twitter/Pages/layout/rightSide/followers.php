<?php
        $q = "SELECT * FROM `user`
                WHERE not user.id = $My_id and 
                user.id NOT IN (SELECT follow.id_follow from `follow` WHERE follow.id_user=$My_id)";
        $getusers = mysqli_query($conn, $q);
        if (mysqli_num_rows($getusers) > 0) {
        ?>
            <h4>You Might Follow</h4>
            <div class="col-md-3">
                <table>
                    <?php
                    while ($i = mysqli_fetch_assoc($getusers)) {
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
                            <input class="btn  folow_button" type="button" onclick="following(<?php echo $user['id']; ?>, <?php echo $id; ?>)" value="Follow">
                                <!-- <div class="folow_button" class="btn" onclick="following()" data-userId="<?php echo $user['id']; ?>" data-Id_follow="<?php echo $id; ?>">Folow</div> -->
                            </th>
                        </tr>

                <?php
                    }
                }
                ?>
                </table>
            </div>