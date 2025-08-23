package main

import kotlin.io.readLine
import kotlin.to

fun main(args: Array<String>) {
//init
    val s = readLine()!!.split(" ")
    val init = mapOf(
        "N" to s[0],
        "H" to s[1],
        "W" to s[2]
    )

    val m = readLine()!!.split(" ")
    var myPosition = MyPosition(m[0].toInt(),m[1].toInt())

    //FRB
    val MoveDirections =readLine()!!.toList()

    //座席　H回出力　1つがWこの要素の配列
    val seatMap = mutableListOf<List<String>>()
    val H = init["H"]!!.toInt()

    for(i in 1..H){
        val h = readLine()!!.split(" ")
        // seatMapにpushする
        seatMap.add(h)
    }

    //myPositon 2,1 -> 1,1 -> 3
    MoveDirections.forEach{
            direction ->
        myPosition = MoveDirectionCal(direction.toString(),myPosition)
        println(searchChocoCount(myPosition,seatMap))
    }
}

fun MoveDirectionCal(direction: String,thisPosition:MyPosition):MyPosition{
    return when (direction) {
        "F" -> thisPosition.moveForward()
        "B" -> thisPosition.moveBackward()
        "R" -> thisPosition.moveRight()
        "L" -> thisPosition.moveLeft()
        else -> thisPosition
    }
}

fun searchChocoCount(position:MyPosition,seatMap:List<List<String>>):Int{
    val y = position.y.toInt()-1
    val x = position.x.toInt()-1
    return seatMap[y][x].toInt()
}


data class MyPosition(val y:Int,val x:Int){
    fun moveForward(): MyPosition {
        // copy()を使って、y座標だけを変更した新しいインスタンスを作成して返す
        return this.copy(y = this.y - 1)
    }

    // 後(Y座標を+1)に移動
    fun moveBackward(): MyPosition {
        return this.copy(y = this.y + 1)
    }

    // 右(X座標を+1)に移動
    fun moveRight(): MyPosition {
        return this.copy(x = this.x + 1)
    }

    // 左(X座標を-1)に移動
    fun moveLeft(): MyPosition {
        return this.copy(x = this.x - 1)
    }
}
