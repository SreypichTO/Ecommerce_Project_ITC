pipeline {
    agent any

    environment {
        BOT_TOKEN = credentials('Telegram_BotToken')
        CHAT_ID = credentials('Telegram_ChatID ')
    }

    stages {
        stage ('start') {
            steps {
                echo "Welcome Jenkins!"
            }
        }
        stage ('Deploy') {
            steps {
                sh 'ssh -o StrictHostKeyChecking=no root@167.71.199.49 "cd /app/e-commerce-vercel/;\
                git fetch;\
                git pull;\
                docker-compose up -d --build;\
                "'
            }
        }
        stage ('ending') {
            steps {
                echo "Thank you!"
            }
        }
    }
    post{
        success{
            sh '''
            sh 1-success-deploy.sh;\
            '''
        }
        failure{
            sh '''
            sh 1-fail-deploy.sh;\
            '''
        }
    }
}