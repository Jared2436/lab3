<h2><?= esc($guest['name']) ?></h2>
<h3>Email</h3>
<p><?= mailto(esc($guest['email'])) ?></p>
<h3>Website</h3>
<p><?= auto_link($guest['website'], 'url') ?></p>
<h3>Comment</h3>
<p><?= esc($guest['comment']) ?></p>
<h3>Gender</h3>
<p><?= ucfirst(esc($guest['gender'])) ?></p>