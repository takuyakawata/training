package main

class Sample {
    fun main(args: Array<String>) {
        val n = readLine()!!.toInt()
        for (i in 1..n) {
            val s = readLine()!!.split(" ")
            println("hello = " + s[0] + " , world = " + s[1])
        }
    }
}