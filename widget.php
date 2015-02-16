										<?php
										$groupname = "MethChef";

										$xml = simplexml_load_file("http://steamcommunity.com/groups/".$groupname."/memberslistxml/?xml=1");
										foreach ($xml->groupDetails->groupName as $name) {}
										foreach ($xml->groupDetails->avatarIcon as $icon)
										{ echo "<h4><img src='$icon'> $name</h4>"; }

										echo "<div class='uk-grid'>";

										foreach ($xml->groupDetails->memberCount as $member)
										{ echo "<div class='uk-width-1-3'>Member<h2>$member</h2></div>"; }

										foreach ($xml->groupDetails->membersInGame as $ingame)
										{ echo "<div class='uk-width-1-3'>InGame: <h2>$ingame</h2></div>"; }

										foreach ($xml->groupDetails->membersOnline as $online)
										{ echo "<div class='uk-width-1-3'>Online: <h2>$online</h2></div>"; }

										echo "</div>";
										?>
										<br />
											<a href="http://steamcommunity.com/groups/<?php echo $groupname ?>/" class="uk-button uk-button-primary uk-button-mini" title="" target="_blank">Steamcommunity</a>