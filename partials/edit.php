<div class="container" ng-app="myApp" ng-controller="productsCtrl">
	<div class="row">
		<div class="col s12">
			<h4>Products</h4>

			<!-- used for searching the current list -->
			<input type="text" ng-model="search" class="form-control" placeholder="Search product...">
      		<!-- pagination controls -->
      <dir-pagination-controls>
        max-size="5"
        direction-links="true"
        boundary-links="true" >
     </dir-pagination-controls>

			<!-- table that shows product record list -->
			<table class="hoverable bordered">
				<thead>
					<tr>
						<th class="text-align-center">ID</th>
						<th class="width-30-pct">Name</th>
						<th class="width-30-pct">Description</th>
						<th class="text-align-center">Price</th>
						<th class="text-align-center">Action</th>
					</tr>
				</thead>
				<tbody ng-init="getAll()">
          <!--
					<tr ng-repeat="d in names | filter:search">
          -->
          <tr dir-paginate="d in names| filter:search|itemsPerPage:4">
						<td class="text-align-center">{{ d.id }}</td>
						<td>{{ d.name }}</td>
						<td>{{ d.description }}</td>
						<td class="text-align-center">{{ d.price|currency }}</td>
						<td>
							<a ng-click="readOne(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">edit</i>Edit</a>
							<a ng-click="deleteProduct(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">delete</i>Delete</a>
						</td>
					</tr>
				</tbody>
			</table>

			<!-- modal for for creating new product -->
			<div id="modal-product-form" class="modal">
				<div class="modal-content">
					<h4 id="modal-product-title">Create New Product</h4>
					<div class="row">
						<div class="input-field col s12">
							<input ng-model="name" type="text" class="validate" id="form-name"  />
							<label for="name">Name</label>
						</div>
						<div class="input-field col s12">
							<textarea ng-model="description" type="text" class="validate materialize-textarea" ></textarea>
							<label for="description">Description</label>
						</div>
            <div class="input-field col s12">
              <select ng-model="selectedCategory" ng-options="category for category in categories"  >
              </select>
              <label for="Product Category">Product Category</label>
            </div>
						<div class="input-field col s12">
							<input ng-model="price" type="text" class="validate" id="form-price"  />
							<label for="price">Price</label>
						</div>
						<div class="input-field col s12">
							<a id="btn-create-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="createProduct()"><i class="material-icons left">add</i>Create</a>

							<a id="btn-update-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="updateProduct()"><i class="material-icons left">edit</i>Save Changes</a>

							<a class="modal-action modal-close waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">close</i>Close</a>
						</div>
					</div>
				</div>
			</div>

			<!-- floating button for creating product -->
			<div class="fixed-action-btn" style="bottom:45px; right:24px;">
				<a class="waves-effect waves-light btn modal-trigger btn-floating btn-large red" href="#modal-product-form" ng-click="showCreateForm()"><i class="large material-icons">add</i></a
			</div>

		</div> <!-- end col s12 -->
	</div> <!-- end row -->
</div> <!-- end container -->
