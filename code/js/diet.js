function generateDietPlan() {
  var gender = document.getElementById('gender').value;
  var fitnessGoal = document.getElementById('fitness-goal').value;
  var day = document.getElementById('day').value;

  var dietPlan = '';


  if (fitnessGoal === 'weight-gain') {
    dietPlan = getWeightGainPlan(gender);
  } else if (fitnessGoal === 'weight-loss') {
    dietPlan = getWeightLossPlan(gender);
  } else if (fitnessGoal === 'muscle-gain') {
    dietPlan = getMuscleGainPlan(gender);
  }


  var dietPlanElement = document.getElementById('diet-plan');
  dietPlanElement.innerHTML = '<h2>' + day.charAt(0).toUpperCase() + ' Diet Plan</h2><p>' + dietPlan + '</p>';
}

function getWeightGainPlan(gender) {

  return `
                <table>
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>
                    <tr><td>Monday</td><td>Oatmeal with fruits</td><td>Grilled chicken salad</td><td>Steamed veggies and fish</td></tr>
                    <tr><td>Tuesday</td><td>Scrambled eggs with spinach</td><td>Turkey sandwich</td><td>Grilled chicken and quinoa</td></tr>
                    <tr><td>Wednesday</td><td>Protein smoothie</td><td>Quinoa with vegetables</td><td>Baked fish with salad</td></tr>
                    <tr><td>Thursday</td><td>Greek yogurt with berries</td><td>Salad with lean turkey</td><td>Grilled salmon with veggies</td></tr>
                    <tr><td>Friday</td><td>Avocado toast with eggs</td><td>Chicken wrap</td><td>Steamed veggies with lean beef</td></tr>
                    <tr><td>Saturday</td><td>Egg white omelette</td><td>Salad with avocado and grilled chicken</td><td>Grilled tofu with quinoa</td></tr>
                    <tr><td>Sunday</td><td>Fruit smoothie with oats</td><td>Grilled fish with salad</td><td>Baked chicken and vegetables</td></tr>
                </table>
            `;
}

function getWeightLossPlan(gender) {

  return `
                <table>
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>
                    <tr><td>Monday</td><td>Scrambled eggs with toast</td><td>Chicken breast with rice</td><td>Grilled salmon with sweet potatoes</td></tr>
                    <tr><td>Tuesday</td><td>Protein pancakes with banana</td><td>Turkey wrap</td><td>Steak with potatoes</td></tr>
                    <tr><td>Wednesday</td><td>Oatmeal with nuts</td><td>Chicken salad with avocado</td><td>Quinoa with grilled fish</td></tr>
                    <tr><td>Thursday</td><td>Greek yogurt with fruits</td><td>Grilled chicken wrap</td><td>Baked salmon with broccoli</td></tr>
                    <tr><td>Friday</td><td>Protein shake with banana</td><td>Steak with sweet potatoes</td><td>Grilled chicken with rice</td></tr>
                    <tr><td>Saturday</td><td>Omelette with spinach</td><td>Grilled fish with brown rice</td><td>Lean beef with quinoa</td></tr>
                    <tr><td>Sunday</td><td>Avocado toast with eggs</td><td>Salad with lean turkey</td><td>Grilled salmon with vegetables</td></tr>
                </table>
            `;
}

function getMuscleGainPlan(gender) {

  return `
  <table>
      <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>
      <tr><td>Monday</td><td>Oatmeal with fruits</td><td>Grilled chicken salad</td><td>Steamed veggies and fish</td></tr>
      <tr><td>Tuesday</td><td>Scrambled eggs with spinach</td><td>Turkey sandwich</td><td>Grilled chicken and quinoa</td></tr>
      <tr><td>Wednesday</td><td>Protein smoothie</td><td>Quinoa with vegetables</td><td>Baked fish with salad</td></tr>
      <tr><td>Thursday</td><td>Greek yogurt with berries</td><td>Salad with lean turkey</td><td>Grilled salmon with veggies</td></tr>
      <tr><td>Friday</td><td>Avocado toast with eggs</td><td>Chicken wrap</td><td>Steamed veggies with lean beef</td></tr>
      <tr><td>Saturday</td><td>Egg white omelette</td><td>Salad with avocado and grilled chicken</td><td>Grilled tofu with quinoa</td></tr>
      <tr><td>Sunday</td><td>Fruit smoothie with oats</td><td>Grilled fish with salad</td><td>Baked chicken and vegetables</td></tr>
  </table>
`;
}