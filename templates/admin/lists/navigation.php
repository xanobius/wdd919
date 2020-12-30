<h1 class="title">Navigations-Elemente</h1>
<table class="table ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Navivationstitel</th>
            <th>Seitentitel</th>
            <th>Priorität</th>
            <th>Starred</th>
            <th>Editieren</th>
            <th>Löschen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pageElement['items'] as $item){ ?>
        <tr>
            <td><?php print $item['id']; ?></td>
            <td><?php print $item['nav_title']; ?></td>
            <td><?php print $item['title']; ?></td>
            <td><?php print $item['priority']; ?></td>
            <td><?php print $item['starred']; ?></td>
            <td><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></td>
            <td><a href="<?php print $pageElement['delete_link'] . $item['id']; ?>">Löschen</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>