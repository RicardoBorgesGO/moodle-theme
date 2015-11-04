<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's roshnilite theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_roshnilite
 * @copyright  2015 dualcube {@link http://dualcube.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>
<footer>
	<div class="block-footer">
		
		<div class="block">
			<div class="title">
				<a href="<?php echo $CFG->wwwroot;?>/?redirect=0" class="inner-logo logo-text"></a>
			</div>
			<div class="description">
				A Upschool é um ambiente de aprendizagem, A Upschool é um ambiente de aprendizagem, 
				A Upschool é um ambiente de aprendizagem, A Upschool é um ambiente de aprendizagem, 
				A Upschool é um ambiente de aprendizagem, A Upschool é um ambiente de aprendizagem.
			</div>
		</div>

		<div class="block">
			<div class="title">
				Principais links
				<span class="border"></span>
			</div>
			<div class="description">
				<ul>
					<li>Página Inicial</li>
					<li>Cursos</li>
					<li>Blog do site</li>
					<li>Fórum</li>
				</ul>

				<ul>
					<li>Sobre nós</li>
					<li>Cursos</li>
					<li>Blog do site</li>
					<li>Fórum</li>
				</ul>
			</div>
		</div>

	</div>
	<?php 
    echo $OUTPUT->home_link();
    echo $OUTPUT->login_info();
    echo $OUTPUT->standard_footer_html();
    ?>
</footer>