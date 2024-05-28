<?php
function generate_table($groups) {
    foreach ($groups as $group_name => $teams) {
        echo '<div class="group-stage-container">';
        echo '<div class="group-title">' . $group_name . '</div>';
        echo '<table class="table-container">';
        echo '<thead>
                <tr>
                    <th class="center">RANK</th>
                    <th class="center team-head">TEAM</th>
                    <th class="center game-head">PLAY</th>
                    <th class="center game-head">W</th>
                    <th class="center match-head">L</th>
                    <th class="center match-head">D</th>
                    <th class="center match-head">SG</th>
                    <th class="center match-head">POIN</th>
                </tr>
              </thead>';
        echo '<tbody>';
        foreach ($teams as $team) {
            echo '<tr>';
            echo '<td><div class="text-center" style="font-size: 1.4rem; font-weight: 800;">' . $team["rank"] . '</div></td>';
            echo '<td>
                    <div class="team-table d-flex flex-row justify-content-start align-items-center">
                        <span class="team mr-1"></span>
                        <span>' . $team["team"] . '</span>
                    </div>
                  </td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["play"] . '</div></td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["w"] . '</div></td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["l"] . '</div></td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["d"] . '</div></td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["sg"] . '</div></td>';
            echo '<td><div class="pr30x font-size-12 center">' . $team["poin"] . '</div></td>';
            echo '</tr>';
        }
        echo '</tbody></table></div>';
    }
}
?>
