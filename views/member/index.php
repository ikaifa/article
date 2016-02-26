<div class="container" style="padding-top: 50px;">

    <h2><span class="label label-success">Member Management</span></h2>
        <br />
       <!--  <button type="button" class="btn btn-primary" id="btnAddNeew">+Add New </button> -->
        <table class="table table-hover">
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>University</th>
            <th>Skill</th>
            <th>Year</th>
            <th>Tel</th>
            <th>Mail</th>
            <th>Date of birth</th>
            <th>Address</th>
            <th>Photo</th>
            <th colspan="2">Option</th> 
    <?php
        foreach($this->memberList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['m_id'] . '</td>';
            echo '<td>' . $value['m_en_name'] . '</td>';
            echo '<td>' . $value['m_gender'] . '</td>';
            echo '<td>' . $value['m_university'] . '</td>';
            echo '<td>' . $value['m_skill'] . '</td>';
            echo '<td>' . $value['m_year'] . '</td>';
            echo '<td>' . $value['m_phone'] . '</td>';
            echo '<td>' . $value['m_mail'] . '</td>';
            echo '<td>' . $value['m_birthdate'] . '</td>';
            echo '<td>' . $value['m_address'] . '</td>';
            echo '<td>' . $value['m_photo'] . '</td>';
            echo '</tr>';
        }
    ?>
    </table>
</div>