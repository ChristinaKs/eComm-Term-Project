Feature: ProductOperations
  In order to manage products
  As an admin
  I need to input the information needed and ensure the result is accurate


  Scenario: Add a product
    Given I am logged in as an admin
    And on the product editing page
    Then I should see an unpopulated product page for the product's information
    When I enter the name, price, description and amount of unities
    And click "add product"
    Then the product is added to the catalogue

  Scenario: Edit a product's price, description or amount left
    Given I am logged in as an admin
    And on the product editing page
    When I search a product
    Then I should see an autopopulated product page with the product's information
    When I change a value
    And click "edit product"
    Then the product's detail should be updated

  Scenario: Remove a product
    Given I am logged in as an admin
    And on the product editing page
    When I search a product
    Then I should see an autopopulated product page with the product's information
    When I click "Remove product"
    And confirm by clicking "Yes" to the "Are you sure you want to remove this product?" prompt
    Then the product is removed from the catalogue
