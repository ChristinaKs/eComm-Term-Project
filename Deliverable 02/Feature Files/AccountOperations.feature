Feature: SignUpOperation
  In order to sign up
  As a customer
  I need to use the sign in page in order to complete these procedures

  Scenario: Signing up to get an account 
    Given I am on Login page
    And I do not have an account
    When I click the "Sign up" button below the login forms  
    Then I am sent to the Sign up page
    When I fill out all the fields with all the information that is needed 
    And click on the "register" button to create an account
    Then my account is created
    
 Feature: DeleteAccountOperation
  In order to delete the account
  As a customer
  I need to navigate to the settings page

  Scenario: Delete an account while being logged in
    Given I am on Home page
    And I am signed in my account
    When I click the "Settings" button in the Menu bar
    Then I am sent to the Settings page
    When I click the "Delete account" button 
    Then I will see a popped up window asking if I really want to delete the account
    Then I need to input my password in the field that requires it to delete my account
    When I press the "Confirm" button to delete all the information about the account
    Then my account should be deleted
    
 Feature: ChangePasswordOperation
  In order to change the password
  As a customer
  I need to navigate to the settings page

  Scenario: Changing password while being logged in
    Given I am on Home page
    And I am signed in my account
    When I click the "Settings" button in the Menu bar
    Then I am sent to the Settinngs page
    When I click the "Change password" button 
    Then I will be sent to the Changing password page
    When I need to input my old password, the new password and confirm my new password in the requiring fields 
    And press the "Change password" button to finish the process
    Then my account's password should be changed
