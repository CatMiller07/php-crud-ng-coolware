<<<<<<< HEAD
<div class="content" ng-controller='mainCtrl'>
=======
<div class="content">
>>>>>>> 276bbad2cf000c2b84ac0738d8a4a998f8c57008
    <article class="row">
        <p class="flow-text col s6 offset-s3" id="intro_txt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </article>

<<<<<<< HEAD
   <h3 class="center-align">Below is  a sample of the product categories we offer:</h3>
   <!-- pagination controls -->
     <dir-pagination-controls>
      max-size="5"
       direction-links="true"
       boundary-links="true" >
    </dir-pagination-controls>

  <table class="centered">
      <thead>
      <tr >
          <th data-field="id" style="padding: 5px 5px;">CategoryID</th>
          <th data-field="name" style="padding: 5px 5px;">Category Name</th>
      </tr>
      </thead>

      <tbody class='bordered' ng-init="getAllCategories()">
      <tr dir-paginate="c in categories |itemsPerPage:3">
          <td style="padding: 5px 5px;">{{c.id }}</td>
          <td style="padding: 5px 5px;">{{ c.name}}</td>
      </tr>
      </tbody>
</table>
  
   <br /><br />
=======
         <h3 class="center-align">Below is  a sample of our product offerings</h3>
        <table class="centered">
            <thead>
            <tr >
                <th data-field="id" style="padding: 5px 5px;">Product ID</th>
                <th data-field="name" style="padding: 5px 5px;">ProductName</th>
                <th data-field="description" style="padding: 5px 5px;">Description</th>
                <th data-field="price" style="padding: 5px 5px;">Price</th>
            </tr>
            </thead>

            <tbody class='bordered' ng-init="rtvAll()">
            <tr  ng-repeat="p in products |limitTo: 3">
                <td style="padding: 5px 5px;">{{p.id }}</td>
                <td style="padding: 5px 5px;">{{ p.name}}</td>
                <td style="padding: 5px 5px;">{{p.description}}</td>
                <td style="padding: 5px 5px;">{{p.price}}</td>
            </tr>
            </tbody>
        </table>

        <br /><br />

>>>>>>> 276bbad2cf000c2b84ac0738d8a4a998f8c57008
</div>
