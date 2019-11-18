<?php

                $instagram_business_id = '17841410191635224';
                $access_token = 'EAALLFpPwJVkBAMxaa26ievrbmVBhRN4IBU25NkvGYZCZAtB0p3XctsgZAwm8CufsvIVlP8thjsIZBQcjGtOrbDRQR5CtLQppNg2rtEg9FnTtGrWL4ZBtbWm8FYQBhp51r65xujMXZBUYDDrHIZCUZAn7OnPOcM8Pyl2yKKtwSgY2PuWrVWHEoWir';

                $target_user = 'asatai_awamori';

                //自分が所有するアカウント以外のInstagramビジネスアカウントが投稿している写真も取得したい場合は以下
                $query = 'business_discovery.username('.$target_user.'){id,followers_count,media_count,ig_id,media{caption,media_url,media_type,like_count,comments_count,timestamp,id}}';

                //自分のアカウントの画像が取得できればOKな場合は$queryを以下のようにしてください。

                //$query = 'name,media{caption,like_count,media_url,permalink,timestamp,username}&access_token='.$access_token;


                $instagram_api_url = 'https://graph.facebook.com/v4.0/';
                $target_url = $instagram_api_url.$instagram_business_id."?fields=".$query."&access_token=".$access_token;
                _log($target_url);
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $target_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $instagram_data = curl_exec($ch);
                curl_close($ch);

                echo $instagram_data;
                exit;
?>