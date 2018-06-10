employeeNumber = 101:150
gender = c('male','female')
gender = sample(gender, size=50, replace=TRUE,prob=c(0.5,0.5))
department = c('Sales','HR','Accounts')
department = sample(department, size=50, replace=TRUE, prob=c(0.5, 0.25, 0.25))
accountsSalary = runif(50, 15000, 20000)
salesSalary = rnorm(50,15000,1250)
hrSalary = rnorm(50, 25000, 2500) 
getSalaries <- function(dep, sales, hr, accounts){
	ret = 1:50
	ret[1:50] = NA
	for(i in 1:50){
		if(dep[i] == 'Sales'){
			ret[i] = sales[i]
		}else if(dep[i] == 'HR'){
			ret[i]	= hr[i]		
		}else if(dep[i] == 'Accounts'){
			ret[i] = accounts[i]
		}
	}
	ret
}
salary =getSalaries(dep=department, sales=salesSalary, hr=hrSalary, accounts=accountsSalary)
dataSet = data.frame(employeeNumber,gender,department,salary)
head(dataSet)
tail(dataSet)




maleSubSet = subset(dataSet, gender %in% c('male'))
femaleSubSet = subset(dataSet, gender %in% c('female'))


summary(maleSubSet)
summary(femaleSubSet)


genderSums = c(sum(maleSubSet$salary),sum(femaleSubSet$salary))
genders = c('male','female')


pie(genderSums, main="Salary by gender", labels=genders)